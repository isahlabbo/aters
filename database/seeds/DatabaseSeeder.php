<?php

use Illuminate\Database\Seeder;
use App\Lga;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        Lga::firstOrCreate(['name'=>'Sabon Birni']);
    }
}
