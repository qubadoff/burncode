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
        if (!Schema::hasTable('offers'))
        {
            Schema::create('offers', function (Blueprint $table) {
                $table->id();
                $table->integer("order")->default('1');
                $table->text("title");
                $table->text("excerpt")->nullable();
                $table->longText("body")->nullable();
                $table->text("image")->nullable();
                $table->text("slug");
                $table->enum("status", ['active', 'de_active']);
                $table->timestamps();
            });
        }
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('offers');
    }
};
