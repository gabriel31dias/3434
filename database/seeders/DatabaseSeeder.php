<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
        $this->call([
            Profile::class,
            TypeStreet::class,
            User::class,
            ServiceStations::class,
            Occupation::class,
            MaritalStatusSeeder::class,
            GenresSeeder::class,
            CountrySeeder::class,
            CountySeeder::class,
            UfSeeder::class,
            RegistrySeeder::class,
        ]);
    }
}
