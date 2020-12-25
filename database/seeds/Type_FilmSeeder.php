<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Type_FilmSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('film_type')->insert([
            'p_id'=>1,
            't_id'=>1
        ]);
        DB::table('film_type')->insert([
            'p_id'=>1,
            't_id'=>2
        ]);
        DB::table('film_type')->insert([
            'p_id'=>1,
            't_id'=>3
        ]);
        DB::table('film_actor')->insert([
            'p_id'=>2,
            'ac_id'=>2,
            'role'=>'Peter Parker / Spider-Man',
        ]);
        DB::table('film_actor')->insert([
            'p_id'=>3,
            'ac_id'=>2,
            'role'=>'Peter Parker / Spider-Man',
        ]);
        DB::table('film_actor')->insert([
            'p_id'=>4,
            'ac_id'=>2,
            'role'=>'Peter Parker / Spider-Man',
        ]);
        DB::table('film_actor')->insert([
            'p_id'=>5,
            'ac_id'=>2,
            'role'=>'Peter Parker / Spider-Man',
        ]);
        DB::table('film_actor')->insert([
            'p_id'=>6,
            'ac_id'=>2,
            'role'=>'Peter Parker / Spider-Man',
        ]);

    }
}
