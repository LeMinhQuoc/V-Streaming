<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class Actor_FilmSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('film_actor')->insert([
            'p_id'=>1,
            'ac_id'=>1,
            'role'=>'Peter Parker / Spider-Man',
        ]);
        DB::table('film_actor')->insert([
            'p_id'=>1,
            'ac_id'=>2,
            'role'=>'Adrian Toomes / Vulture',
        ]);
        DB::table('film_actor')->insert([
            'p_id'=>1,
            'ac_id'=>3,
            'role'=>'Tony Stark / Iron Man',
        ]);
        DB::table('film_actor')->insert([
            'p_id'=>2,
            'ac_id'=>1,
            'role'=>'Peter Parker / Spider-Man',
        ]);
        DB::table('film_actor')->insert([
            'p_id'=>3,
            'ac_id'=>1,
            'role'=>'Peter Parker / Spider-Man',
        ]);
        DB::table('film_actor')->insert([
            'p_id'=>4,
            'ac_id'=>1,
            'role'=>'Peter Parker / Spider-Man',
        ]);
        DB::table('film_actor')->insert([
            'p_id'=>5,
            'ac_id'=>1,
            'role'=>'Peter Parker / Spider-Man',
        ]);
        DB::table('film_actor')->insert([
            'p_id'=>6,
            'ac_id'=>1,
            'role'=>'Peter Parker / Spider-Man',
        ]);
        DB::table('film_actor')->insert([
            'p_id'=>7,
            'ac_id'=>1,
            'role'=>'Peter Parker / Spider-Man',
        ]);
        DB::table('film_actor')->insert([
            'p_id'=>8,
            'ac_id'=>1,
            'role'=>'Peter Parker / Spider-Man',
        ]);
        DB::table('film_actor')->insert([
            'p_id'=>9,
            'ac_id'=>1,
            'role'=>'Peter Parker / Spider-Man',
        ]);
        DB::table('film_actor')->insert([
            'p_id'=>10,
            'ac_id'=>1,
            'role'=>'Peter Parker / Spider-Man',
        ]);
        DB::table('film_actor')->insert([
            'p_id'=>11,
            'ac_id'=>1,
            'role'=>'Peter Parker / Spider-Man',
        ]);
    }
}
