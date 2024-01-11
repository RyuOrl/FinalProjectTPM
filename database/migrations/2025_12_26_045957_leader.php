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
        Schema::create('leaders', function (Blueprint $table) {
            $table->id();
            $table->string('full_name');
            $table->string('email')->unique();
            $table->string('whatsapp_number')->unique();
            $table->string('line_id')->unique();
            $table->string('github_id')->nullable();
            $table->string('birth_place');
            $table->date('birth_date');
            $table->string('cv_path');
            $table->string('card_path'); //yang ini gmn gais, 
            $table->unsignedBigInteger('group_id');
            $table->rememberToken();
            $table->timestamps();
            $table->foreign('group_id')->references('id')->on('groups');
        });
    
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
