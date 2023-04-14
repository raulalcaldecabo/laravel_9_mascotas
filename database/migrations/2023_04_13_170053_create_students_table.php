<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up(){
        Schema::create('students', function (Blueprint $table) {
            $table->id();
            $table->string('nick');
            $table->string('pet_name');
            $table->enum('race', ['Boxer', 'Bulldog', 'Labrador', 'Caniche']);
            $table->enum('pet_gender', ['Male', 'Female']);
            $table->integer('Age');
            $table->string('Color');
            $table->string('Human_name');
            $table->string('Phone');
            $table->string('student_image');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down(){
        Schema::dropIfExists('students');
    }
};

