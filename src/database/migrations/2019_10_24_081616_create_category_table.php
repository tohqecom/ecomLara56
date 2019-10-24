<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCategoryTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('categories', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('c_name')->unique();
            $table->string('c_slug')->index();
            $table->string('c_icon')->nullable();
            $table->string('c_active')->default(1)->index();
            $table->string('c_total_product')->nullable();
            $table->string('c_title_seo')->nullable();
            $table->string('c_description_seo')->nullable();
            $table->string('c_keyword_seo')->nullable();
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
        Schema::dropIfExists('categories');
    }
}
