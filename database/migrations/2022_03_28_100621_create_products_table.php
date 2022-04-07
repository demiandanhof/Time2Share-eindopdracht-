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
            $table->foreignId('user_id')->constrained();
            $table->foreignId('borrow_id')->nullable();
            $table->string('name');
            $table->string('status');
            $table->string('description');
            $table->string('photo')->default('/img/product_placeholder.png');
            $table->string('deadline');
            $table->string('category');
            $table->string('owner_name');
            $table->string('owner_profile_picture');
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
