<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePhrasesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('phrases', function (Blueprint $table) {
            $table->id();
            $table->text('eng')->nullable();
            $table->text('rus')->nullable();
            $table->string('status')->default('new');
            $table->string('type')->default('phrase');
            $table->integer('lesson')->nullable();
            $table->integer('wrongAnswer')->default(0);
            $table->integer('correctAnswer')->default(0);
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
        Schema::dropIfExists('phrases');
    }
}
