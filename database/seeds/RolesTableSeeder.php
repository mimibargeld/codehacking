<?php

use Illuminate\Database\Seeder;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $roles=[
            [
                'name'=>'administrator'
            ],
            [
                'name'=>'author'
            ],
            [
                'name'=>'subscriber'
            ]
        ];

        foreach($roles as $role){
            $r = new App\Role;
            $r->name = $role['name'];
            $r->save();
        }
    }
}
