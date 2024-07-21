<?php

namespace Database\Seeders;

use App\Models\train;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class trainSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker): void {
        for ($i=0; $i < 25; $i++) {
            $train = new train();
            $train->Azienda = $faker->words(2, true);
            $train->Stazione_di_partenza = $faker->words(2, true);
            $train->Stazione_di_arrivo = $faker->words(2, true);
            $train->Orario_di_partenza = "2024-07-22 06:00:00";
            $train->Orario_di_arrivo = "2024-07-22 10:00:00";
            $train->Codice_treno = $faker->randomNumber(5, true);
            $train->Numero_carrozze = $faker->randomNumber(2, true);
            $train->In_orario = $faker->boolean();
            $train->Cancellato = $faker->boolean();
            $train->save();
        }
    }
}