<?php

namespace Database\Seeders;

use App\Models\Train;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Faker\Generator as Faker;

class TrainSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    
    public function run(Faker $faker): void
    {
        for ($i = 0; $i < 10; $i++){
            $newTrain = new Train();
            $newTrain->azienda = $faker->word();
            $newTrain->stazione_partenza = $faker->city();
            $newTrain->stazione_arrivo = $faker->city();
            $newTrain->giorno_partenza = $faker->date();
            $newTrain->orario_partenza = $faker->time();
            $newTrain->giorno_arrivo = $faker->date();
            $newTrain->orario_arrivo = $faker->time();
            $newTrain->codice_treno = $faker->randomNumber(3, true);
            $newTrain->numero_carrozze = $faker->randomDigit();
            $newTrain->in_orario = $faker->boolean();
            $newTrain->in_orario = $faker->boolean();
            $newTrain->save();
        }
    }
}