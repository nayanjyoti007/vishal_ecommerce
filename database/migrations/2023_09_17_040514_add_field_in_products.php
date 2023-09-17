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
        Schema::table('products', function (Blueprint $table) {
            $table->string('lead_time')->nullable()->after('model');
            $table->string('tax')->nullable()->after('lead_time');
            $table->string('tax_type')->nullable()->after('tax');
            $table->char('is_promo', 1)->comment('1:active,2:de-active')->default(2)->after('tax_type');
            $table->char('is_featured', 1)->comment('1:active,2:de-active')->default(2)->after('is_promo');
            $table->char('is_discounted', 1)->comment('1:active,2:de-active')->default(2)->after('is_featured');
            $table->char('is_tranding', 1)->comment('1:active,2:de-active')->default(2)->after('is_discounted');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('products', function (Blueprint $table) {
            //
        });
    }
};
