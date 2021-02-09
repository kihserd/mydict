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
        \DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        \App\Models\Phrase::truncate();
        \DB::statement('SET FOREIGN_KEY_CHECKS=1;');
        \App\Models\Phrase::factory(1)->create();
    }
}
