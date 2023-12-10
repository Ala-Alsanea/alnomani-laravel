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
        Schema::create('contact_infos', function (Blueprint $table) {
            $table->id();
            $table->string('phone_1')->default(0);
            $table->string('phone_2')->default(0);
            $table->string('phone_whatsapp')->default('0');
            $table->string('email')->default('0');
            $table->string('facebook_link',1000)->default('0');
            $table->string('insta_link',1000)->default('0');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('contact_infos');
    }
};
