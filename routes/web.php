<?php
namespace App\Http\Controllers;
use Illuminate\Support\Facades\Route;
use Session;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//import
Route::get('/export',[StudentController::class,'export']);


// import routes
Route::get("import", [StudentController::class, "importstudent"]);
Route::post("import", [StudentController::class, "import"])->name('import');


Route::get('/', function () {
    return view('welcome');
});
Route::get('/logout', function () {
    Session::forget('user');
    return redirect(route('login'));
})->name('logout');

Route::group(['middleware'=>"web"],function(){

//
//Route::view('home','home');
Route::get('home',[StudentController::class,'index']);
//list
Route::get('list',[StudentController::class,'list']);
//pagination
Route::get("/list",[StudentController::class,'pagination']);
//add
 Route::post('add',[StudentController::class,'add']);
Route::view('add','add');
// delete
Route::get('/delete/{id}',[StudentController::class,'delete']);
//edit
//Route::view('edit','edit');
Route::get('/edit/{id}',[StudentController::class,'edit']);
Route::post('edit',[StudentController::class,'update']);
//register
Route::view('register','register');
Route::post('register',[StudentController::class,'register']);
//login
Route::view('login','login')->name('login');
Route::post('login',[StudentController::class,'login']);
//request
Route::view('contactus','contactus');
Route::post('contactus',[StudentController::class,'contactus']);

});




