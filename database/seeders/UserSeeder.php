<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use App\Http\Models\User;
// use Spatie\Permission\Traits\HasRoles;
// use Spatie\Permission\Models\Role;
// use Spatie\Permission\Models\Permission;
class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function up()
{
    Schema::create('posts', function (Blueprint $table) {
        $table->bigIncrements('id');
        $table->integer('user_id');
        $table->string('title');
        $table->longText('description');
        $table->timestamps();
    });
}
public function run()
{
    // factory('App\Http\Models\User', 15)->create();
}


    // public function run()
    // {
    //     $users = User::create([
    //         'username' => 'admin', 
    //         'email' => 'admin@test.com',
    //         'password' => bcrypt('password')
    //     ]);

    //     $role = Role::create(['name' => 'Admin']);

    //     $permissions = Permission::pluck('id','id')->all();

    //     $role->syncPermissions($permissions);

    //     $user->assignRole([$role->name]);
    // }
}


