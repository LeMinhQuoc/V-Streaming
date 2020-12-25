<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class ActorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('actor')->insert([
            'name'=>'Tom Holland', 
            'avt'=>'/img/tom.jpg', 
            'country'=>'USA',
            'dob'=>'2000-03-24'
        ]);
        DB::table('actor')->insert([
            'name'=>'Michael Keaton ', 
            'avt'=>'/img/michael.jpg', 
            'country'=>'USA',
            'dob'=>'1998-06-19'
        ]);
        DB::table('actor')->insert([
            'name'=>'Robert Downey Jr. ', 
            'avt'=>'/img/yuchi.jpg',  
            'country'=>'USA',
            'dob'=>'1998-06-19'
        ]);
    }
}
