<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSellersBooksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sellers_books', function (Blueprint $table) {
            $table->id();
            $table->string('seller_id');
            $table->string('book_id');
            $table->string('price');
            $table->string('discount_price')->nullable();
            $table->string('discount_percent')->nullable();
            $table->string('old_or_new')->nullable();
            $table->string('binding')->nullable();
            $table->string('current_stock')->nullable();
            $table->string('total_stock');
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
        Schema::dropIfExists('sellers_books');
    }
}
