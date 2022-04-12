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
        Schema::table('safety_information_histories', function (Blueprint $table) {
            $table->integer('own_condition')->nullable(false)->after('user_id');
            $table->integer('family_condition')->nullable(false)->after('own_condition');
            $table->integer('go_to_work')->nullable(false)->after('family_condition');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('safety_information_histories', function (Blueprint $table) {
            //
        });
    }
};
