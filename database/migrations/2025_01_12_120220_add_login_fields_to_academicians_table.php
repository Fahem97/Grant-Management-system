<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::table('academicians', function (Blueprint $table) {
            $table->string('username')->unique()->nullable();
            $table->string('password')->nullable();
        });
    }


    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::table('academicians', function (Blueprint $table) {
            $table->dropColumn(['username', 'password']);
        });
    }
};
