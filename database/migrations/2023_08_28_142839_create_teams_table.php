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
        Schema::create('teams', function (Blueprint $table) {
            $table->id();
            $table->text("name");
            $table->text("description")->nullable();
            $table->text("facebook_page")->nullable();
            $table->text("instagram_page")->nullable();
            $table->text("twitter_page")->nullable();
            $table->text("linkedin_page")->nullable();
            $table->text("tiktok_page")->nullable();
            $table->longText("body");
            $table->text("slug");
            $table->text("image");
            $table->integer("sort")->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('teams');
    }
};
