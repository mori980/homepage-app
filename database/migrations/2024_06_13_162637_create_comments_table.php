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
        Schema::create('comments',function(Blueprint $table)
        {
            $table -> id(); 
            $table -> unsignedBigInteger('tweet_id');
            $table -> foreign('tweet_id') -> references('id') -> on('tweets');
            $table -> string('name',15);
            $table -> string('content');
            $table -> timestamps();
        });
    }
 
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('comments');
    }
};
