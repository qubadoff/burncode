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
        if (!Schema::hasTable('tasks'))
        {
            Schema::create('tasks', function (Blueprint $table) {
                $table->id();
                $table->text('name');
                $table->longText('body');
                $table->enum('status', ['discussion', 'ongoing', 'done'])->default('discussion');
                $table->timestamps();
            });
        }
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tasks');
    }
};
