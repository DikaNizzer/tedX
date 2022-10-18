<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;
use App\Models\Admin;
use App\Models\Event;
use App\Models\Peserta;
use App\Models\Pendaftaran;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

// INSERT INTO `tedx`.`users` (`email`, `type`, `password`) 
// VALUES ('peserta@gmail.com', 'peserta', '$2y$10$eU/fXO7XOS9b5w7vkkZmu.LXYt2PqNMG7EYPlfrwBFJDiy1t9H1gy');
        \App\Models\User::create([
            'email' => 'peserta@gmail.com',
            'type' => 'peserta',
            'password' => Hash::make('123')
        ]);

// INSERT INTO `tedx`.`pesertas` (`nama`, `fakultas`, `angkatan`, `user_id`) 
// VALUES ('peserta', 'vokasi', '20', '5');

        \App\Models\Peserta::create([
            'nama' => 'peserta',
            'fakultas' => 'vokasi',
            'angkatan' => '20',
            'user_id' => 1
        ]);

        \App\Models\Event::create([
            'nama_event' => 'Mainevent'
        ]);

        \App\Models\Event::create([
            'nama_event' => 'Subevent'
        ]);

// INSERT INTO `tedx`.`pendaftarans` (`status`, `event_id`, `peserta_id`) 
// VALUES ('0', '2', '2');

        \App\Models\Pendaftaran::create([
            'status' => '0',
            'event_id' => 2,
            'peserta_id' => 1
        ]);

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        //with parental package the type will set to 'admin' in db table instead of admin model namespace (App\Models\Admin)
        
    }
}
