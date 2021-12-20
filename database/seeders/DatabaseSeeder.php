<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Events;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        Events::factory(3)->create(
            ["isImportant" => true,]
        );
        Events::factory(10)->create();
    }
}
