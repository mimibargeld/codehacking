<?php

use Illuminate\Database\Seeder;
use App\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $users=[
            [
                'name' => 'Mimi',
                'email' => 'mimi@gmail.com',
                'password' => bcrypt('mimi1234'),
                'status' => 1,
                'role_id' => 1
            ],
            [
                'name' => 'Tom Ellis',
                'email' => 'tom@gmail.com',
                'password' => bcrypt('tom12345'),
                'status' => '1',
                'role_id' => 2
            ]
        ];

        foreach ($users as $user){
            $u = new App\User;
            $u->name = $user['name'];
            $u->email = $user['email'];
            $u->password = $user['password'];
            $u->is_active = $user['status'];
            $u->role_id = $user['role_id'];
            $u->save();
        }
    }
}
