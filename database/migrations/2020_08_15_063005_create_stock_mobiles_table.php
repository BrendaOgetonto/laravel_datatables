<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStockMobilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('stock_mobiles', function (Blueprint $table) {
            $table->id();
            $table->string('store_owner')->nullable();
            $table->string('product')->nullable();
            $table->string('quantity_available')->nullable();
            $table->string('sold')->nullable();
            $table->string('clear_status')->nullable();
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
        Schema::dropIfExists('stock_mobiles');
    }
}
