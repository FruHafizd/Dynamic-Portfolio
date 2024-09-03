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
        Schema::create('title_pages', function (Blueprint $table) {
            $table->id();
            $table->string('about_page_header');
            $table->string('about_page_above');
            $table->string('project_page_header');
            $table->string('contact_page_header');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('title_pages');
    }
};
