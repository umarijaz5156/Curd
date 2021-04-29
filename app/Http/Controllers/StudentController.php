<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;
 use App\Models\User;
 use App\Models\Admin;
 use App\Models\Member;
 use App\Exports\StudentExport;
 use Maatwebsite\Excel\Facades\Excel;
use Session;
use Crypt;
class StudentController extends Controller
{
    //
    public function index()
    {
      
        
        return view('home');
    }
    // list
    public function list()
    {
        $data= Student::all();
        
    
        return view('list',["data"=>$data]);
    }
   
    //pagination
    function pagination()
    {
        $data= Student::paginate(3);
        return view('list',['data'=>$data]);
    }
    //add 
    public function add(Request $req)
    {
        //return $req->input();
        $stu = new Student;
        $stu->name=$req->input('name');
        $stu->email=$req->input('email');
        $stu->address=$req->input('address');
        $stu->class=$req->input('class');
        $stu->save();
        $req->session()->flash('status','Congratulations! Student Data Enter Successfully');
        return redirect('list');
    }
    //delete
    public function delete($id)
    {
     Student::find($id)->delete();
     Session::flash('status',' Student Data Delete Successfully');
     return redirect('list');
    }
    //edit
    public function edit($id)
    {
        $data=Student::find($id);
        return view('edit',['data'=>$data]);
        
    }
    //update copy add
    public function update(Request $req)
    {
    
        $stu = Student::find($req->input('id')) ;
        $stu->name=$req->input('name');
        $stu->email=$req->input('email');
        $stu->address=$req->input('address');
        $stu->class=$req->input('class');
        $stu->save();
        $req->session()->flash('status',' Student Data Updated Successfully');
        return redirect('list');
    }
    //register
    public function register(Request $req)
    {
        //echo Crypt::encrypt('1234');
            //return $req->input();
            $user = new User;
            $user->name=$req->input('name');
            $user->email=$req->input('email');
            
             $user->address=$req->input('address');
            // $user->contact=$req->input('contact');
            $user->password=Crypt::encrypt($req->input('password'));
            $user->save();
            $req->Session()->put('user',$req->input('name'));
             return redirect('home');
           
    }

    //login
    public function login(Request $req)
    {
            $user= User::where('email',$req->input('email'))->get();
            $req->Session()->put('admin',$user[0]->is_admin);
            if(Crypt::decrypt( $user[0]->password)==$req->input('password'))
            {
                $req->Session()->put('user',$user[0]->name);
             return redirect('home');

            }
    }
    //request
    public function contactus(Request $req)
    {
        $member = new Member;
        $member->name=$req->input('name');
        $member->email=$req->input('email');
        
         $member->address=$req->input('address');
         $member->contact=$req->input('contact');
         $member->textarea=$req->input('textarea');
        
        $member->save();
       
         return redirect('home');
    }

    //
    public function export()
    {
       
         return Excel::download(new StudentExport, 'Student.xlsx');

    }
    //import

    public function importstudent()
    {
        return view('import');
    }

    public function import(Request $request)
    {
        Excel::import(new Studentimport, $request->file('file'));
        return back()->with('success', 'Students imported successfully');
    }
}
  
