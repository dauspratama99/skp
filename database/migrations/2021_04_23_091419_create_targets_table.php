<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTargetsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('targets', function (Blueprint $table) {
            $table->id();
            $table->string('activities', 100);
            $table->string('credit_number');
            $table->string('ak');
            $table->string('quantity');
            $table->unsignedBigInteger('output_id');
            $table->string('mutu');
            $table->string('time');
            $table->string('cost');
            $table->string('nip_rated');
            $table->unsignedBigInteger('periode_id');
            $table->string('type');
            $table->unsignedBigInteger('Parent_id')->nullable();
            $table->timestamps();

            $table->foreign('nip_rated')->references('nip')->on('users')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('periode_id')->references('id')->on('periodes')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('targets');
    }
}
