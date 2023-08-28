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
        Schema::create('projects', function (Blueprint $table) {
            $table->id();
            $table->integer('cat_id')->nullable();
            $table->string('name')->unique();
            $table->string('description')->nullable();
            $table->longText('body')->nullable();
            $table->string('image')->nullable();
            $table->string('project_link')->nullable();
            $table->string('client_info')->nullable();
            $table->string('slug');
            $table->integer('sort');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('projects');
    }
};
