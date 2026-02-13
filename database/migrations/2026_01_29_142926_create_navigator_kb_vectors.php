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
        Schema::create('navigator_kb_vectors', function (Blueprint $table) {
            $table->id();
            $table->string('module');        // e.g. anxiety.md
            $table->longText('content');     // Raw KB text
            $table->json('embedding');       // Vector embedding array
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('navigator_kb_vectors');
    }
};
