<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
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
            $table->bigInteger('category_id');
            $table->string('name');
            $table->string('slug');
            $table->longText('description');
            $table->integer('original_price');
            $table->integer('selling_price');
            $table->string('image');
            $table->integer('quantity');
            $table->integer('tax');
            $table->tinyInteger('status')->default('0');
            $table->tinyInteger('trending')->default('0');
            $table->mediumText('meta_title');
            $table->mediumText('meta_keywords');
            $table->mediumText('meta_description');
            $table->integer('created_by');
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
};
