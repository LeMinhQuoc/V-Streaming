<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('type')->insert([
            'type'=>'Action',
        ]);
        DB::table('type')->insert([
            'type'=>'Adventure',
        ]);
        DB::table('type')->insert([
            'type'=>'Sci-Fi',
        ]);
        
    }
}
