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
        Schema::create('posts', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('campaign_id'); 
            $table->string('post_type');
            $table->string('description')->nullable();
            $table->string('instagram_page');
            $table->string('tags')->nullable();
            $table->string('script')->nullable();
            $table->string('file')->nullable();
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
        Schema::dropIfExists('posts');
    }
};
