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
        Schema::create('logos', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('campaign_id'); 
            $table->string('logo_name');
            $table->string('logo_file')->nullable();
            $table->string('tags')->nullable();
            $table->integer('payment')->nullable();
            $table->string('description')->nullable();
            $table->string('sample_video')->nullable();
            $table->unsignedBigInteger('created_by'); 
            $table->unsignedBigInteger('updated_by')->nullable(); 
            $table->softDeletes();
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
        Schema::dropIfExists('logos');
    }
};
