<?php

namespace Database\Seeders;

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
        \App\Models\Role::factory(20)->create();
        \App\Models\User::factory(20)->create();
        \App\Models\Team::factory(20)->create();
        \App\Models\TeamMember::factory(20)->create();
        \App\Models\Accident::factory(20)->create();
        \App\Models\Task::factory(20)->create();
    }
}
