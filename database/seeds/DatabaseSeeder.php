<?php

use Illuminate\Database\Seeder;
use App\Models\LocalStack;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        factory(LocalStack::class, 50)->create();
    }
}
