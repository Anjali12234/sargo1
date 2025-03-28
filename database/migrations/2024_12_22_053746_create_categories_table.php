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
        Schema::create('categories', function (Blueprint $table) {
            $table->id();
            $table->foreignId('category_id')->nullable()->constrained()->cascadeOnDelete();
            $table->string('title');
            $table->integer('position')->nullable();
            $table->string('bg_image')->nullable();
            $table->longText('description')->nullable();
            $table->string('slug')->nullable();
            $table->string('slider_page')->nullable();
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('categories');
    }
};
