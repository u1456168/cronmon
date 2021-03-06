<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddLastAlertedToCronjobsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('cronjobs', function (Blueprint $table) {
            $table->dateTime('last_alerted')->default('2000-01-01 01:01:01');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('cronjobs', function (Blueprint $table) {
            $table->dropColumn('last_alerted');
        });
    }
}
