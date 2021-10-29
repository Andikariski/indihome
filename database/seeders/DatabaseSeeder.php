<?php

namespace Database\Seeders;

use App\Models\DataPelanggan;
use Illuminate\Database\Seeder;

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
        $this->call(DataPenjualanSeeder::class);
        $this->call(UserSeeder::class);
    }
}
