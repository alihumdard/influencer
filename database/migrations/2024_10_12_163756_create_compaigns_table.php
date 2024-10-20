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
        Schema::create('compaigns', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('banner')->nullable();
            $table->string('influencer_type')->nullable();
            $table->string('gender')->nullable();
            $table->text('description')->nullable();
            $table->string('promotion_type')->nullable();
            $table->string('platform')->nullable();
            $table->json('regions')->nullable(); 
            $table->json('languages')->nullable();
            $table->json('follower_ranges')->nullable(); 
            $table->unsignedBigInteger('created_by'); 
            $table->unsignedBigInteger('updated_by')->nullable(); 
            $table->tinyInteger('is_draft')->default(1); 
            $table->tinyInteger('current_step')->default(1); 
            $table->timestamps();
            $table->foreign('created_by')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('updated_by')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('compaigns');
    }
};
