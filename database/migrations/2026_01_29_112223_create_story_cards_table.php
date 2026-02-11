<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('story_cards', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->enum('condition_tag', ['anxiety','mood','stress','sleep','intrusive']);
            $table->text('summary');
            $table->string('source_url')->nullable();
            $table->string('image_url')->nullable();
            $table->string('disclaimer');
            $table->boolean('is_active')->default(true);
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('story_cards');
    }
};
