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

            $table->string('name', 80);
            $table->string('slug', 80)->unique();
            $table->text('description');
            $table->string('price');
            $table->text('image')->nullable();
            $table->text('gallery')->nullable();

            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('subcategory_id');

            $table->foreign('user_id')
                ->references('id')
                ->on('users')
                ->ondelete('cascade');

            $table->foreign('subcategory_id')
                ->references('id')
                ->on('subcategories')
                ->ondelete('cascade');

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
