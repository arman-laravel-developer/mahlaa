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
        Schema::table('general_settings', function (Blueprint $table) {
            $table->string('currency_code')->default('USD')->after('favicon');
            $table->string('currency_symbol')->default('$')->after('currency_code');
            $table->string('currency_name')->default('US Dollar')->after('currency_symbol');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('general_settings', function (Blueprint $table) {
            $table->dropColumn(['currency_code', 'currency_symbol', 'currency_name']);
        });
    }
};