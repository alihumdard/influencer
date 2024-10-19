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
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->json('product_images')->nullable();
            $table->string('main_image')->nullable();
            $table->foreignId('category_id')->constrained()->onDelete('cascade');
            $table->decimal('cut_price', 8, 2)->nullable();
            $table->decimal('price', 8, 2);
            $table->integer('stock')->default(0);
            $table->string('stock_status')->nullable();
            $table->string('sku')->unique();
            $table->string('barcode')->unique();
            $table->decimal('weight')->default(0.00);
            $table->boolean('status')->default(1);
            $table->text('description')->nullable();
            $table->text('short_description')->nullable();
            $table->string('mpn')->nullable();
            $table->string('gtin')->nullable();
            $table->string('gtin_type')->nullable();
            $table->boolean('downloadable')->default(0);
            $table->boolean('requires_shipment')->default(1);
            $table->string('manufacturer')->nullable();
            $table->string('model_number')->nullable();
            $table->string('origin')->nullable();
            $table->integer('shipped_quantity')->default(0);
            // $table->foreignId('brand_id')->constrained()->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
