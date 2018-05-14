<?php

use Illuminate\Database\Seeder;

class MovieTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('movies')->delete();
        $movies = [
          ['title' => 'black hawk down', 'year' => 2002],
          ['title' => 'lady bird', 'year' => 2017],
          ['title' => 'the last of the mohicans', 'year' => 1992],
          ['title' => 'the godfather', 'year' => 1972],
          ['title' => 'black panther', 'year' => 2018]
        ];
        DB::table('movies')->insert($movies);
    }
}
