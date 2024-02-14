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
        Schema::create('titles', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('image') -> default('Imagine a pending default url goes here i dont have it yet');
            $table->string('content') -> default('yet another pending default doc');
            $table->boolean('iscurated') -> default (false);      
            $table->timestamps();
            
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('titles');
    }
};
