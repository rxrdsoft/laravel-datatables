<?php

use Illuminate\Database\Seeder;

class SuscriptorsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(\App\Suscriptor::class,50)->create();
    }
}
