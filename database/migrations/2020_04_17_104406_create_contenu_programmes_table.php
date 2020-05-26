<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateContenuProgrammesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contenu_programmes', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->text('img');
            $table->string('libelle');
            $table->text('description');
            $table->string('date_heure');
            $table->string('lieu');
            $table->timestamps();

            $table->bigInteger('jour_programme_id')->unsigned()->index();

            $table->foreign('jour_programme_id')
                ->references('id')
                ->on('jour_programmes')
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('contenu_programmes');
    }
}
