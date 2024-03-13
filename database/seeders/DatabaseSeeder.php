<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Product;
use Illuminate\Database\Seeder;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        Product::factory()->count(5)->create();
       /*  $this->call([
            //Se indica el factory que se va a utilizar
            Product::factory()->count(5)->create()

        ]);*/
    }
}
