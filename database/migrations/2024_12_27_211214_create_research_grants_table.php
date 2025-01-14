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
        Schema::create('research_grants', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('grant_provider');
            $table->decimal('grant_amount', 10, 2);
            $table->date('start_date');
            $table->integer('duration_months');
            $table->unsignedBigInteger('project_leader_id');
            $table->timestamps();

            $table->foreign('project_leader_id')->references('id')->on('academicians')->onDelete('cascade');
        });
    }


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('research_grants');
    }
};
