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
        Schema::create('product', function (Blueprint $table) {
            $table->id();
            $table->string('code')->unique();
            $table->foreignId('category_id')->constrained('category');
            $table->foreignId('supplier_id')->constrained('supplier');
            $table->string('product_name');
            $table->decimal('price',19,2)->default(0);
            $table->decimal('disc',19,2)->nullable();
            $table->decimal('moq',19,2)->default(0.5);
            $table->text('supplier_name')->nullable();
            $table->enum('sale_vol',['LSN','PCS','DUS','PACK'])->default('LSN');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('product');
    }
};
