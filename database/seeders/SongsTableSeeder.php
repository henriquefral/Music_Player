<?php

namespace Database\Seeders;

use App\Models\Song;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SongsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Song::create([
            'title' => 'The Song Of The White Wolf', 
            'artist' => 'The Witcher Netflix soundtrack',
            'src' => 'audio/THE WITCHER (OST) - The Song Of The White Wolf.mp3',
            'cover' =>'images/cover/Geralt.jpg',
            'background' => 'images/background/The Witcher.jpg',
        ]); 
        Song::create([
            'title' => "Let Me Down Slowly",
            'artist' => "Alec Benjamin",
            'src' => "audio/Alec Benjamin - Let Me Down Slowly.mp3",
            'cover' => "images/cover/Spike.jpg",
            'background' => "images/background/Cowboy bebop.jpg"
        ]);
        Song::create([
            'title' => "I'm A Man",
            'artist' => "Black Strobe",
            'src' => "audio/Black Strobe - I'm A Man.mp3",
            'cover' => "images/cover/Thomas.jpg",
            'background' => "images/background/Peaky Blinders.jpg"
        ]);
        Song::create([
            'title' => "When I go",
            'artist' => "Keaton Simons",
            'src' => "audio/Keaton Simons – When I Go.mp3",
            'cover' => "images/cover/Harvey.jpg",
            'background' => "images/background/Harvey Specter.jpg"
        ]);
    }
}
