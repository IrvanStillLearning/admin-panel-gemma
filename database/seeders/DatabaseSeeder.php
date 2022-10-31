<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Banner;
use Illuminate\Support\Str;
use App\Models\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::factory(5)->create();

        Banner::create([
            'image' => 'Banner-1.jpg',
            'judul' => 'Judul Banner 1',
            'status' => true,
            'user_id' => 1,
            'desc' => Str::random(20),
        ]);

        Banner::create([
            'image' => 'Banner-2.jpg',
            'judul' => 'Judul Banner 2',
            'status' => true,
            'user_id' => 1,
            'desc' => Str::random(20),
        ]);

        Banner::create([
            'image' => 'Banner-3.jpg',
            'judul' => 'Judul Banner 3',
            'status' => false,
            'user_id' => 2,
            'desc' => Str::random(20),
        ]);

        Banner::create([
            'image' => 'Banner-4.jpg',
            'judul' => 'Judul Banner 4',
            'status' => true,
            'user_id' => 4,
            'desc' => Str::random(20),
        ]);

        Banner::create([
            'image' => 'Banner-5.jpg',
            'judul' => 'Judul Banner 5',
            'status' => false,
            'user_id' => 1,
            'desc' => Str::random(20),
        ]);

        Banner::create([
            'image' => 'Banner-6.jpg',
            'judul' => 'Judul Banner 6',
            'status' => true,
            'user_id' => 3,
            'desc' => Str::random(20),
        ]);
        Banner::create([
            'image' => 'Banner-7.jpg',
            'judul' => 'Judul Banner 7',
            'status' => true,
            'user_id' => 2,
            'desc' => Str::random(20),
        ]);
        Banner::create([
            'image' => 'Banner-8.jpg',
            'judul' => 'Judul Banner 8',
            'status' => false,
            'user_id' => 1,
            'desc' => Str::random(20),
        ]);
        Banner::create([
            'image' => 'Banner-9.jpg',
            'judul' => 'Judul Banner 9',
            'status' => true,
            'user_id' => 4,
            'desc' => Str::random(20),
        ]);
        Banner::create([
            'image' => 'Banner-10.jpg',
            'judul' => 'Judul Banner 10',
            'status' => false,
            'user_id' => 1,
            'desc' => Str::random(20),
        ]);
    }
}
