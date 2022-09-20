<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTrainsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('trains', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('azienda', 30);
            $table->string('stazion_di_partenza', 30);
            $table->string('stazione_di_arrivo', 30);
            $table->integer('orario_di_partenza');
            $table->integer('orario_di_arrivo');
            $table->tinyInteger('codice_treno')->unsigned();
            $table->tinyInteger('numero_di_carozze')->unsigned();
            $table->boolean('in_orario')->default(0);
            $table->boolean('is_cancellato')->default(1);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('trains');
    }
}
