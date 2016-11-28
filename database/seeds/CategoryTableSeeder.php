<?php

use Illuminate\Database\Seeder;

class CategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

        $categories = [[
            'name' => 'PHP'
        ],[
            'name' => 'Laravel'
        ],[
            'name' => 'Javascript'
        ],[
            'name' => 'Bootstrap'
        ]];

        foreach ($categories as $category) {
            $c = new App\Category;
            $c->name = $category['name'];
            $c->save();
        }

    }
}
