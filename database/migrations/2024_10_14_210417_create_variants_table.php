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
        Schema::create('variants', function (Blueprint $table) {
            $table->id();
            $table->decimal('variant_price', 10, 2)->default(0.00);
            $table->decimal('variant_cut_price', 10, 2)->nullable()->default(0.00);
            $table->string('variant_name')->nullable();
            $table->string('variant_value')->nullable();
            $table->string('variant_inventory')->nullable()->default('0');
            $table->decimal('variant_weight', 10, 2)->nullable()->default(0.00);
            $table->string('variant_barcode')->nullable();
            $table->string('variant_sku')->nullable();
            $table->string('variant_attr_image')->nullable();
            $table->foreignId('product_id')->constrained()->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('variants');
    }
};
