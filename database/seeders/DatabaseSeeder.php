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
        Events::factory(10)->create();
    }
}
