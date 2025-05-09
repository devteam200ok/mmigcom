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
        Schema::create('settings', function (Blueprint $table) {
            $table->id();
            $table->longText('seo_code')->nullable();
            $table->string('seo_title')->nullable();
            $table->string('seo_description')->nullable();
            $table->string('seo_keywords')->nullable();
            $table->string('seo_author')->nullable();
            
            $table->string('og_url')->nullable();
            $table->string('og_type')->nullable();
            $table->string('og_title')->nullable();
            $table->string('og_description')->nullable();
            $table->string('og_image')->nullable();

            $table->string('company')->nullable();
            $table->string('company_registration_number')->nullable();
            $table->string('company_ceo')->nullable();
            $table->string('company_email')->nullable();
            $table->string('company_telemarketing_number')->nullable();
            $table->string('company_hr')->nullable();
            $table->string('company_jeonju')->nullable();
            $table->string('company_gasan')->nullable();
            $table->string('company_phone')->nullable();
            $table->string('company_workhour')->nullable();

            $table->string('footer')->nullable();
            
            $table->longText('privacy')->nullable();
            $table->longText('terms')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('settings');
    }
};
