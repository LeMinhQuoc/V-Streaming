<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
// use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;


class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */


    
    public function run()

    {

        DB::table('user')->insert([
                'name'=> 'Admin',
                'phonenumber'=>'01694844753',
                'password'=>hash('ripemd160','123456'),
                'avatar'=>'/img/unknowavatar.png',
            ]);
        $faker = Faker\Factory::create();

        for($i=0; $i<5; $i++){
            
            DB::table('user')->insert([
                'name'=> $faker->name,
                'phonenumber'=>$faker->phoneNumber,
                'password'=> Str::random(10),
                'avatar'=>$faker->image,
            ]);
           
        }
    }
}
