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
        Schema::create('news', function (Blueprint $table) {
            $table->id();
            $table->text("title");
            $table->mediumText("description")->nullable();
            $table->mediumText("meta_description")->nullable();
            $table->mediumText("meta_keywords")->nullable();
            $table->longText("body")->nullable();
            $table->text("slug");
            $table->integer("cat_id");
            $table->integer("author_id")->nullable();
            $table->text("status")->default('pending');
            $table->text("image");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('news');
    }
};
