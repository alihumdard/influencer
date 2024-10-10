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
        Schema::create('brand_details', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->onDelete('cascade');
            $table->string('brand_name');
            $table->string('phone')->nullable(); 
            $table->string('email')->nullable(); 
            $table->string('whatsapp')->nullable(); 
            $table->string('contact_person_name');
            $table->string('contact_person_designation');
            $table->string('brand_type');
            $table->string('business_type');
            $table->text('address_1');
            $table->text('address_2')->nullable();
            $table->string('whatsapp_verified')->default('no');
            $table->string('phone_verified')->default('no'); 
            $table->string('email_verified')->default('no');
            $table->foreignId('created_by')->constrained('users')->onDelete('cascade');
            $table->foreignId('updated_by')->nullable()->constrained('users')->onDelete('cascade');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('brand_details');
    }
};
