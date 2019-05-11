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
        $this->call('ProductsTableSeeder');
        $this->call('StoresTableSeeder');
        $this->call('ReviewsTableSeeder');
        $this->call('ProductStoreTableSeeder');
    }
}
