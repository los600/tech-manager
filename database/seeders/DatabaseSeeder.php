<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Events;
use App\Models\User;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {  
        $admin = User::factory([
        'email' => 'admin@admin.com',
        'name' => 'admin',
        'isAdmin' => true
        ])->create();

        $user = User::factory([ 
        'email' => 'user@user.com',
        'name' => 'user',
        
        ])->create();

        Events::factory(3)->create(
            ["isImportant" => true,]
        );
        Events::factory(10)->create();
    }
}
