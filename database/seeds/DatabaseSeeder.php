<?php

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
        $this->call([blank_seed::class,contact_seed::class,RoleTableSeeder::class,users_seed::class]);
    }
}
