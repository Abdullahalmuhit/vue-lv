<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateItemsProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('items_products', function (Blueprint $table) {
            $table->id();
            $table->tinyInteger('item_id')->nullable();
            $table->tinyInteger('product_id')->nullable();
            $table->string('product_name')->nullable();
            $table->string('item_name')->nullable();
            $table->string('Item_price')->nullable();
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
        Schema::dropIfExists('items_products');
    }
}
