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
        Schema::table('coupons', function (Blueprint $table) {
            $table->char('type', 1)->comment('1:Value,2:Percentage')->after('coupons_value');
            $table->double('min_order_amt',10,2)->nullable()->after('type');
            $table->char('is_one_time',1)->comment('0:NO,1:YES')->default(0)->after('min_order_amt');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('coupons', function (Blueprint $table) {
            //
        });
    }
};
