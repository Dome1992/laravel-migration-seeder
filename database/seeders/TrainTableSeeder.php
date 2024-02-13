<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\Train;

class TrainTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        // STO CREANDO 50 NUOVI ELEMENTI NELLA TABELLA trains DEL MIO DATABASE
        Train::factory()->count(50)->create();
    }
}
