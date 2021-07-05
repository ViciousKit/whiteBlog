<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('posts')->insert([
            [
                'theme' => 'LIFESTYLE',
                'title' => 'More than just a music festival',
                'photo' => 'photo1.png',
                'text' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris'
            ],
            [
                'theme' => 'LIFESTYLE',
                'title' => 'Life tastes better with coffee',
                'photo' => 'photo2.png',
                'text' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris'
            ],
            [
                'theme' => 'LIFESTYLE',
                'title' => 'American dream',
                'photo' => 'photo3.png',
                'text' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris'
            ],
            [
                'theme' => 'LIFESTYLE',
                'title' => 'A day exploring the Alps',
                'photo' => 'photo4.png',
                'text' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris'
            ],
            [
                'theme' => 'LIFESTYLE',
                'title' => 'Top 10 song for running',
                'photo' => 'photo5.png',
                'text' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris'
            ],
            [
                'theme' => 'LIFESTYLE',
                'title' => 'More than just a music festival',
                'photo' => 'photo6.png',
                'text' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris'
            ],
            [
                'theme' => 'LIFESTYLE',
                'title' => 'More than just a music festival',
                'photo' => 'photo7.png',
                'text' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris'
            ],
            [
                'theme' => 'LIFESTYLE',
                'title' => 'More than just a music festival',
                'photo' => 'photo8.png',
                'text' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris'
            ],
            [
                'theme' => 'LIFESTYLE',
                'title' => 'More than just a music festival',
                'photo' => 'photo9.png',
                'text' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris'
            ],
            [
                'theme' => 'LIFESTYLE',
                'title' => 'More than just a music festival',
                'photo' => 'photo10.png',
                'text' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris'
            ],
            [
                'theme' => 'LIFESTYLE',
                'title' => 'More than just a music festival',
                'photo' => 'photo11.png',
                'text' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris'
            ],
            [
                'theme' => 'LIFESTYLE',
                'title' => 'More than just a music festival',
                'photo' => 'photo12.png',
                'text' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris'
            ],
            [
                'theme' => 'LIFESTYLE',
                'title' => 'More than just a music festival',
                'photo' => 'photo13.png',
                'text' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris'
            ],
            [
                'theme' => 'LIFESTYLE',
                'title' => 'More than just a music festival',
                'photo' => 'photo14.png',
                'text' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris'
            ],
            [
                'theme' => 'LIFESTYLE',
                'title' => 'More than just a music festival',
                'photo' => 'photo15.png',
                'text' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris'
            ],
            [
                'theme' => 'LIFESTYLE',
                'title' => 'Cold winter days',
                'photo' => 'photo16.png',
                'text' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris'
            ],
        ]);
    }
}
