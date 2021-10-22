<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRealiationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('realiations', function (Blueprint $table) {
            $table->id();
            $table->string('quantity');
            $table->string('credit_number');
            $table->string('mutu');
            $table->string('cost');
            $table->string('time');
            $table->timestamps();


            $table->foreign('id')->references('id')->on('targets')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('realiations');
    }
}
