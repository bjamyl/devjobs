<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Listing;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();
        // Listing::create([
        //     'title'=> 'React-Django Developer',
        //     'tags' => 'react, django',
        //     'company' => 'Spexbyte Inc',
        //     'location' => 'Accra, GA',
        //     'email' => 'info@spexbyte.com',
        //     'website' => 'https://www.spexbyte.com',
        //     'description' => 'His palms are sweaty, knees weak arms are heavy,
        //     there is vomit on his sweater already. Knock knock, let the devil in,
        //     malevolent as I have ever been.'

        // ]);

        // Listing::create([
        //     'title' => 'Dart Mobile Developer',
        //     'tags' => 'dart, flutter',
        //     'company' => 'Baunfire',
        //     'location' => 'Boston MA',
        //     'email' => 'info@baunfire.com',
        //     'website'=> 'https://www.baunfire.com',
        //     'description' => 'No games Imma change what you call rage.
        //     Turn this room into dogs caged. I was playing in the beginning,
        //     the mood all changed, I been chewed and spit out and booed off stage.
        //     But I kept writing and stepwriting the next cipher. Best believe someone is
        //     paying the pied piper.'
        // ]);

        $user = User::factory()->create([
            'name' => 'Emily Addo',
            'email' => 'emily@carnivalmail.com'
        ]);

        Listing::factory(6)->create([
            'user_id' => $user->id
        ]);

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
