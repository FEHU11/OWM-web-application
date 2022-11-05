<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('name', 50)->unique();
            $table->string('image');
            $table->json('gallery');
            $table->foreignId('category_id')
                ->nullable()
                ->constrained('categories')
                ->onDelete('set null');
            $table->string('store_name', 50);
            $table->double('price');
            $table->string('city', 50);
            $table->integer('offer_percentage');
            $table->string('desc', 50)->unique();
            $table->foreignId('car_model_id')
                ->nullable()
                ->constrained('car_models')
                ->onDelete('set null');
            $table->integer('rate');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('products');
    }
}
