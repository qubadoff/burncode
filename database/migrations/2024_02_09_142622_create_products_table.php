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
        if (!Schema::hasTable('products'))
        {
            Schema::create('products', function (Blueprint $table) {
                $table->id();
                $table->integer('order_column')->nullable();
                $table->text('name');
                $table->text('slug');
                $table->text('description')->nullable();
                $table->longText('body')->nullable();
                $table->text('image')->nullable();
                $table->timestamps();
            });
        }
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
