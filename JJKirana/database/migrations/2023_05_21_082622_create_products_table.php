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
            $table->string('name');
            $table->float('price')->comment('price for customer');
            $table->string('rate')->comment('rate store as : 2,KG');
            $table->string('image')->comment('image store as : image1,image2,image3,...');
            $table->string("badge")->comment("Like : new , sale, feature");
            $table->string('description');
            $table->float('real_price')->comment('product real price for owner');
            $table->integer('category_id');
            $table->integer('brand_id');
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
