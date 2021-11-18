<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Andika Riski',
            'email' => 'dika@gmail.com',
            'password' => bcrypt('12345678')
        ]);

        User::create([
            'name' => 'Dimas',
            'email' => 'dimas@gmail.com',
            'password' => bcrypt('12345678')
        ]);
    }
}
