<?php

use Illuminate\Database\Seeder;
use App\Services\Register;
use App\Services\Sokoto;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        new Register(new Sokoto);
    }
}
