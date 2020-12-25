<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FilmSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('film')->insert([
            'p_name'=>'Spider-Man: Homecoming',
            'p_serie'=>1,
            'p_link'=>'https://www.imdb.com/video/vi4175083801?playlistId=tt2250912&ref_=tt_ov_vi',
            'p_image'=>'./img/1.jpg',
            'p_director'=>' Jon Watts',
            'p_nation'=>'USA',
            'p_released_year'=>'2017-07-07',
            'p_sumary'=>'Peter Parker balances his life as an ordinary high school student in Queens with his superhero alter-ego Spider-Man, and finds himself on the trail of a new menace prowling the skies of New York City.',
        ]);
        DB::table('film')->insert([
            'p_name'=>'Big Hero 6',
            'p_serie'=>1,
            'p_link'=>'https://www.imdb.com/title/tt2245084/?ref_=nv_sr_srsg_0',
            'p_image'=>'./img/2.jpg',
            'p_director'=>'Don Hall, Chris Williams',
            'p_nation'=>'USA',
            'p_released_year'=>'2014-11-07',
            'p_sumary'=>'The special bond develops between plus-sized inflatable robot Baymax, and prodigy Hiro Hamada. They team up with a group of friends to form a band of high-tech heroes.',
        ]);
        DB::table('film')->insert([
            'p_name'=>'Antman and the wasp',
            'p_serie'=>1,
            'p_link'=>'https://www.imdb.com/video/vi4137138969?playlistId=tt5095030&ref_=tt_ov_vi',
            'p_image'=>'./img/3.jpg',
            'p_director'=>'Peyton Reed',
            'p_nation'=>'USA',
            'p_released_year'=>'2018-11-07',
            'p_sumary'=>'As Scott Lang balances being both a superhero and a father, Hope van Dyne and Dr. Hank Pym present an urgent new mission that finds the Ant-Man fighting alongside The Wasp to uncover secrets from their past.',
        ]);
        DB::table('film')->insert([
            'p_name'=>'Avengers: Age of ultron',
            'p_serie'=>1,
            'p_link'=>'https://www.imdb.com/title/tt5095030/?ref_=fn_al_tt_1',
            'p_image'=>'./img/4.jpg',
            'p_director'=>'Peyton Reed',
            'p_nation'=>'USA',
            'p_released_year'=>'2018-11-07',
            'p_sumary'=>'When Tony Stark and Bruce Banner try to jump-start a dormant peacekeeping program called Ultron, things go horribly wrong and its up to Earths mightiest heroes to stop the villainous Ultron from enacting his terrible plan.',
        ]);
        DB::table('film')->insert([
            'p_name'=>'Doctor strange',
            'p_serie'=>1,
            'p_link'=>'https://www.imdb.com/title/tt5095030/?ref_=fn_al_tt_1',
            'p_image'=>'./img/5.jpg',
            'p_director'=>'Peyton Reed',
            'p_nation'=>'USA',
            'p_released_year'=>'2018-11-07',
            'p_sumary'=>'While on a journey of physical and spiritual healing, a brilliant neurosurgeon is drawn into the world of the mystic arts.',
        ]);
        DB::table('film')->insert([
            'p_name'=>'Alita: Battle angel',
            'p_serie'=>1,
            'p_link'=>'https://www.imdb.com/title/tt5095030/?ref_=fn_al_tt_1',
            'p_image'=>'./img/6.jpg',
            'p_director'=>'Peyton Reed',
            'p_nation'=>'USA',
            'p_released_year'=>'2018-11-07',
            'p_sumary'=>'A deactivated cyborg is revived, but cannot remember anything of her past life and goes on a quest to find out who she is.',
        ]);
        DB::table('film')->insert([
            'p_name'=>'Avengers: IMAX',
            'p_serie'=>1,
            'p_link'=>'https://www.imdb.com/title/tt5095030/?ref_=fn_al_tt_1',
            'p_image'=>'./img/8.jpg',
            'p_director'=>'Peyton Reed',
            'p_nation'=>'USA',
            'p_released_year'=>'2018-11-07',
            'p_sumary'=>'As Scott Lang balances being both a superhero and a father, Hope van Dyne and Dr. Hank Pym present an urgent new mission that finds the Ant-Man fighting alongside The Wasp to uncover secrets from their past.',
        ]);
        DB::table('film')->insert([
            'p_name'=>'Antman and the wasp',
            'p_serie'=>1,
            'p_link'=>'https://www.imdb.com/title/tt5095030/?ref_=fn_al_tt_1',
            'p_image'=>'./img/3.jpg',
            'p_director'=>'Peyton Reed',
            'p_nation'=>'USA',
            'p_released_year'=>'2018-11-07',
            'p_sumary'=>'As Scott Lang balances being both a superhero and a father, Hope van Dyne and Dr. Hank Pym present an urgent new mission that finds the Ant-Man fighting alongside The Wasp to uncover secrets from their past.',
        ]);
        DB::table('film')->insert([
            'p_name'=>'Ant-Man',
            'p_serie'=>1,
            'p_link'=>'https://www.imdb.com/title/tt5095030/?ref_=fn_al_tt_1',
            'p_image'=>'./img/slide.jpg',
            'p_director'=>'Peyton Reed',
            'p_nation'=>'USA',
            'p_released_year'=>'2018-11-07',
            'p_sumary'=>'Armed with a super-suit with the astonishing ability to shrink in scale but increase in strength, cat burglar Scott Lang must embrace his inner hero and help his mentor, Dr. Hank Pym, plan and pull off a heist that will save the world.',
        ]);
        DB::table('film')->insert([
            'p_name'=>'Deadpool 2',
            'p_serie'=>1,
            'p_link'=>'https://www.imdb.com/title/tt5095030/?ref_=fn_al_tt_1',
            'p_image'=>'./img/slide1.jpg',
            'p_director'=>'Peyton Reed',
            'p_nation'=>'USA',
            'p_released_year'=>'2018-11-07',
            'p_sumary'=>'Foul-mouthed mutant mercenary Wade Wilson (a.k.a. Deadpool), brings together a team of fellow mutant rogues to protect a young boy with supernatural abilities from the brutal, time-traveling cyborg Cable.',
        ]);
        DB::table('film')->insert([
            'p_name'=>'Avengers: Age of ultron',
            'p_serie'=>1,
            'p_link'=>'https://www.imdb.com/title/tt5095030/?ref_=fn_al_tt_1',
            'p_image'=>'./img/slide2.jpg',
            'p_director'=>'Peyton Reed',
            'p_nation'=>'USA',
            'p_released_year'=>'2018-11-07',
            'p_sumary'=>'As Scott Lang balances being both a superhero and a father, Hope van Dyne and Dr. Hank Pym present an urgent new mission that finds the Ant-Man fighting alongside The Wasp to uncover secrets from their past.',
        ]);


    }
}
