<?php

use Illuminate\Database\Seeder;

class PagesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('pages')->delete();

        \DB::table('pages')->insert(array (
            0 =>
            array (
                'id' => 1,
                'category' => 'home',
                'title' => '',
                'keyword' => '',
                'description' => '',
                'heading' => '',
                'sub_heading' => '',
            ),
            1 =>
            array (
                'id' => 2,
                'category' => 'about',
                'title' => '',
                'keyword' => '',
                'description' => '',
                'heading' => '',
                'sub_heading' => '',
            ),
            2 =>
            array (
                'id' => 3,
                'category' => 'contact',
                'title' => '',
                'keyword' => '',
                'description' => '',
                'heading' => '',
                'sub_heading' => '',
            ),

        ));
    }
}
