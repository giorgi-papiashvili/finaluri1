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
        Schema::create('quizzes', function (Blueprint $table) {
            
            $table->id();
            $table->timestamps();
            $table->unasignedBigInteger('user_id');
            $table->string('title');
            $table->text('desc');
            $table->string('img')->nullable();
            $table->boolean('approved')->default(false);
            $table->foreign('user_id')->references('id')->on('user');
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('quizzes');
    }
};
