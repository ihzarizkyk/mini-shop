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
        Schema::create('detail_product', function (Blueprint $table) {
            $table->id();
            $table->integer("product_id")->unique();
            $table->text("product_photo")->nullable();
            $table->text("product_desc");
            $table->text("quantity");
            $table->integer("price");
            $table->integer("discount");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('detail_product');
    }
};
