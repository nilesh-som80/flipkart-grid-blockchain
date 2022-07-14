<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ModifyBookTables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('books', function (Blueprint $table) {
            $table->string('authors_name')->nullable();
            $table->string('categories_name')->nullable();
            $table->string('seller_id')->nullable();
            $table->string('price')->nullable();
            $table->string('discount_percent')->nullable();
            $table->string('discount_price')->nullable();
            $table->string('old_or_new')->nullable();
            $table->string('binding')->nullable();
            $table->string('current_stock')->nullable();
            $table->string('total_stock')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('books', function (Blueprint $table) {
            //
        });
    }
}
