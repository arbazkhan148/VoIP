<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('distributor_plans', function (Blueprint $table) {
            $table->id();
            $table->string('distributor_id')->nullable();
            $table->string('plan_type')->nullable();
            $table->string('plan_desc')->nullable();
            $table->date('date')->nullable();
            $table->string('status')->default('Pending');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('distributor_plans');
    }
};
