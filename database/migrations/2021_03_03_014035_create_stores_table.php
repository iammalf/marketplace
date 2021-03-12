<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStoresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('stores', function (Blueprint $table) {
            $table->id();

            $table->string('name', 80);
            $table->string('slug', 80)->unique();
            $table->text('abstract');
            $table->text('about');
            $table->string('email', 100)->unique();
            $table->string('phone', 100);
            $table->string('address', 150);
            $table->string('socialfb', 150);
            $table->string('socialinst', 150);
            $table->text('logo')->nullable();
            $table->text('cover')->nullable();

            //LLAVE FORANEA
            $table->unsignedBigInteger('user_id');

            $table->foreign('user_id')
                ->references('id')
                ->on('users')
                ->onDelete('cascade');

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
        Schema::dropIfExists('stores');
    }
}
