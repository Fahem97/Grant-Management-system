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
        Schema::create('grant_members', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('research_grant_id');
            $table->unsignedBigInteger('academician_id');
            $table->timestamps();

            $table->foreign('research_grant_id')->references('id')->on('research_grants')->onDelete('cascade');
            $table->foreign('academician_id')->references('id')->on('academicians')->onDelete('cascade');
        });
    }


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('grant_members');
    }
};
