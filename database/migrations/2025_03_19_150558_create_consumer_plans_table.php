<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('consumer_plans', function (Blueprint $table) {
            $table->id();
            $table->string('user_id')->nullable();
            $table->string('plan_type')->nullable();
            $table->string('plan_desc')->nullable();
            $table->string('custom_value')->nullable();
            $table->date('date')->nullable();
            $table->string('status')->default('Pending')->nullable();
            $table->string('status1')->default('Pending')->nullable();
            $table->string('assigned_distributor')->nullable();
            $table->timestamps();
        });
    }
    public function down(): void
    {
        Schema::dropIfExists('consumer_plans');
    }
};
