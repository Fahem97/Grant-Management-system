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
        Schema::create('project_milestones', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('research_grant_id');
            $table->string('name');
            $table->date('target_completion_date');
            $table->string('deliverable');
            $table->string('status')->nullable();
            $table->text('remark')->nullable();
            $table->timestamp('date_updated')->nullable();
            $table->timestamps();

            $table->foreign('research_grant_id')->references('id')->on('research_grants')->onDelete('cascade');
        });
    }


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('project_milestones');
    }
};
