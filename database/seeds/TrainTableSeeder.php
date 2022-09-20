<?php

use App\Models\Train;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class TrainTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)


    {
        for ($i = 0; $i < 10; $i++) {
            $new_train = new Train();

            $new_train->azienda = $faker->word();
            $new_train->stazion_di_partenza = $faker->city();
            $new_train->stazione_di_arrivo = $faker->city();
            $new_train->orario_di_partenza = $faker->numberBetween(1, 24);
            $new_train->orario_di_arrivo = $faker->numberBetween(1, 24);
            $new_train->codice_treno = $faker->numberBetween(1, 200);
            $new_train->numero_di_carozze = $faker->randomDigit();
            $new_train->in_orario = $faker->boolean();
            $new_train->is_cancellato = $faker->boolean();

            $new_train->save();
        }
    }
}



        // DATI PRESI DA CONFIG 
        //         $trains = config('trains');
        //         foreach ($trains as $train) {
        //             $new_train = new Train();

        //             $new_train->azienda = $train['azienda'];
        //             $new_train->stazion_di_partenza = $train['stazion_di_partenza'];
        //             $new_train->stazione_di_arrivo = $train['stazione_di_arrivo'];
        //             $new_train->orario_di_partenza = $train['orario_di_partenza'];
        //             $new_train->orario_di_arrivo = $train['orario_di_arrivo'];
        //             $new_train->codice_treno = $train['codice_treno'];
        //             $new_train->numero_di_carozze = $train['numero_di_carozze'];
        //             $new_train->in_orario = $train['in_orario'];
        //             $new_train->is_cancellato = $train['is_cancellato'];

        //             $new_train->save();
        //         }

// <!-- $table->id();
// $table->timestamps();
// $table->string('azienda', 30);
// $table->string('stazion_di_partenza', 30);
// $table->string('stazione_di_arrivo', 30);
// $table->integer('orario_di_partenza');
// $table->integer('orario_di_arrivo');
// $table->tinyInteger('codice_treno')->unsigned();
// $table->tinyInteger('numero_di_carozze')->unsigned();
// $table->boolean('in_orario')->default(0);
// $table->boolean('is_cancellato')->default(1);