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
        Schema::create('members', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->string('password'); // 🔐 اضافه شده
            $table->string('phone')->nullable();
            $table->text('address')->nullable();
            $table->date('registration_date');
            $table->timestamp('email_verified_at')->nullable(); // ✔️ اختیاری
            $table->rememberToken(); // 🔑 برای "remember me"
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('members');
    }
};
