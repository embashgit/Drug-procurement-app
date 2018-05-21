<?php

use Illuminate\Database\Seeder;

class DrugTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Models\Drug::class, 10)->create();        
    }
}