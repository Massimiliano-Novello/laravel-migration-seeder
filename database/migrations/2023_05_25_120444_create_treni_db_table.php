<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('treni_db', function (Blueprint $table) {
            $table->id();
            $table->string('azienda', 100);
            $table->string('stazione_di_partrnza', 100);
            $table->string('stazione_di_arrivo', 100);
            $table->time('orario_di_partenza');
            $table->time('orario_di_arrivo');
            $table->mediumInteger('codice_treno' );
            $table->smallInteger('numerocarrozze');
            $table->string('in_orario', 10);
            $table->string('cancellato', 10);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('treni_db');
    }
};
