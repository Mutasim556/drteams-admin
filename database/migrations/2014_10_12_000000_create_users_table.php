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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->string('phone')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->text('status')->default('Active');
            $table->integer('role')->comment('Admin=1 , Supervisor=2 , Editor=3 , Customer=4');
            $table->integer('delete')->default(0);
            $table->integer('edit_basic')->default(0);
            $table->string('edit_basic_endtime')->nullable();
            $table->integer('edit_additional')->default(0);
            $table->string('edit_additional_endtime')->nullable();
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
