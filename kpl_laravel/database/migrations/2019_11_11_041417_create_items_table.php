<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('items', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('item_name');
            $table->string('item_description')->nullable();
            $table->string('item_image_link')->nullable();
            $table->unsignedInteger('category_id');
            // $table->unsignedInteger('brand_id');
            $table->timestamps();


            //FOREIGN KEYS
            $table->foreign('category_id')
            ->references('id')->on('categories')
            ->onDelete('cascade')
            ->onUpdate('cascade');
            
            // $table->foreign('brand_id')
            // ->references('id')->on('brands')
            // ->onDelete('cascade')
            // ->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('items');
    }
}
