<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

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
            $table->bigIncrements('id');
            $table->string('p_name')->unique();
            $table->longText('p_descr')->nullable();
            $table->longText('p_content')->nullable();
            $table->tinyInteger('p_active')->default(0)->index();
            $table->tinyInteger('p_hot')->default(0);
            $table->string('p_thumb')->nullable();
            $table->integer('p_category_id')->nullable(false);
            $table->integer('p_discount')->nullable();
            $table->decimal('price')->nullable();
            $table->string('p_tile_seo')->nullable();
            $table->string('p_descr_seo')->nullable();
            $table->string('p_slug')->nullable();
            $table->string('p_author_id')->default(0)->index();
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
