<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        DB::table('products')->insert([
            [
                'name' => 'Sepatu Sneakers',
                'price' => 500000,
                'stock' => 10,
            ]
        ]);
    }
}
