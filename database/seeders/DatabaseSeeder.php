<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([CategoryTableSeeder::class]);
        $this->command->info('Таблица категорий загружена данными!');

        $this->call([BrandTableSeeder::class]);
        $this->command->info('Таблица категорий загружена данными!');

        $this->call([ProductTableSeeder::class]);
        $this->command->info('Таблица категорий загружена данными!');
    }
}
