<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
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
            $table->integer('category_id')->nullable();
            $table->string('name')->nullable();
            $table->string('slug')->nullable();
            $table->string('brand')->nullable();
            $table->string('image')->nullable();
            $table->string('model')->nullable();
            $table->longText('short_description')->nullable();
            $table->longText('long_description')->nullable();
            $table->longText('keywords')->nullable();
            $table->longText('technical_specifications')->nullable();
            $table->longText('uses')->nullable();
            $table->string('warranty')->nullable();
            $table->char('status', 1)->comment('1:active,2:de-active')->default(1)->nullable();
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
        //
    }
};
