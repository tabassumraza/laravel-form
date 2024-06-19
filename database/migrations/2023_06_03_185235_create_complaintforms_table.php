<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('complaintforms', function (Blueprint $table) {
            $table->id();
            $table->string('fname',50);
            $table->string('lname',50);
            $table->string('cityname',100);
            $table->string('regionname',100);
            $table->string('postal',100);
            $table->string('country',100);
            $table->string('email',100);
            $table->string('phone',100);
            $table->string('date',100);
            $table->string('typeOFproblem',100);
            $table->string('onBehalfof',100);
            $table->string('complain',100);

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('complaintforms');
    }
};
