<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBrandTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // Schema::create('brands', function (Blueprint $table) {
        //     $table->increments('id');
        //     $table->string('brand_name');
        //     $table->unsignedInteger('category_id');
        //     $table->timestamps();

        //     $table->foreign('category_id')
        //     ->references('id')->on('categories')
        //     ->onDelete('cascade')
        //     ->onUpdate('cascade');
        // });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('brand');
    }
}
