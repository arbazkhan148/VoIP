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
            $table->string('user_id');
            $table->string('plan_type');
            $table->string('plan_desc')->nullable();
            $table->string('custom_value')->nullable();
            $table->date('date')->default(date('Y-m-d'));
            $table->string('status')->default('Pending');
            $table->timestamps();
        });
    }
    public function down(): void
    {
        Schema::dropIfExists('consumer_plans');
    }
};
