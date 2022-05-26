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
        Schema::create('students', function (Blueprint $table) {
            $table->id();
            $table->string('studentName',50);
            $table->string('studentSurname',50);
            $table->integer('grades');
            $table->integer('averege');
            $table->dateTime('date_and_time')->nullable();
            $table->string('class',50);
            $table->boolean('makeUpTest')->default(false);
            $table->boolean('attendence')->default(false);
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
        Schema::dropIfExists('students');
    }
};
