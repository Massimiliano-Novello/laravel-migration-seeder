<?php

namespace Database\Seeders;

use App\Models\Treni;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class treni_dbTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker) 
    {
        for ($i = 0; $i < 15; $i++) {
            $treni = new Treni();
            $treni->azienda = $faker->words();
            $treni->stazione_di_partrnza = $faker->city();
            $treni->stazione_di_arrivo = $faker->city();
            $treni->orario_di_partenza = $faker->time();
            $treni->orario_di_arrivo = $faker->time();
            $treni->codice_treno = $faker->ean8();
            $treni->numerocarrozze = $faker->randomNumber(1, false);
            $treni->in_orario = $faker->randomElement([true, false]);
            $treni->cancellazione = $faker->randomElement([true, false]);
            $treni->save();
        }
    }
}
