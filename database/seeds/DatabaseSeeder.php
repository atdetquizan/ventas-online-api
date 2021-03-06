<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();   
        // Register the user seeder
        $this->call(UserTableSeeder::class);
        Model::reguard();
    }
}
