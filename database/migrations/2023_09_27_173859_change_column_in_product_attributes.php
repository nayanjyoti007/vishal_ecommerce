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
        Schema::table('product_attributes', function (Blueprint $table) {
            $table->double('mrp',10,2)->default(0)->change();
            $table->double('price',10,2)->default(0)->change();
            $table->integer('qty')->default(0)->change();
            $table->integer('size_id')->default(0)->change();
            $table->integer('color_id')->default(0)->change();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('product_attributes', function (Blueprint $table) {
            //
        });
    }
};
