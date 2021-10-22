<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSkpsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('skps', function (Blueprint $table) {
            $table->string('nip_rated');
            $table->unsignedBigInteger('periode_id');
            $table->unsignedBigInteger('rated_unit_id');
            $table->unsignedBigInteger('rated_position_id');
            $table->unsignedBigInteger('rated_rankgroup_id');
            $table->string('commitment');
            $table->string('discipline');
            $table->string('cooperation');
            $table->string('leadership');
            $table->string('integrity');
            $table->string('service_oriented');
            $table->string('objection_rated');
            $table->string('response_evaluator');
            $table->string('superior_decision');
            $table->string('recommendation');
            $table->date('start_date');
            $table->date('date_given_to_superiors');
            $table->unsignedBigInteger('evaluator_rankgroup_id');
            $table->string('nip_evaluator');
            $table->unsignedBigInteger('evaluator_unit_id');
            $table->unsignedBigInteger('evaluator_position_id');
            $table->timestamps();

            $table->primary('nip_rated', 'periode_id');
            $table->foreign('nip_rated')->references('nip')->on('users')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('periode_id')->references('id')->on('periodes')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('rated_unit_id')->references('id')->on('units')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('rated_position_id')->references('id')->on('positions')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('rated_rankgroup_id')->references('id')->on('rank_groups')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('nip_evaluator')->references('nip')->on('users')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('evaluator_unit_id')->references('id')->on('units')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('evaluator_position_id')->references('id')->on('positions')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('evaluator_rankgroup_id')->references('id')->on('rank_groups')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('skps');
    }
}
