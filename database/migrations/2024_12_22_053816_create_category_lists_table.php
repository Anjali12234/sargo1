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
        Schema::create('category_lists', function (Blueprint $table) {
            $table->id();
            $table->foreignId('super_category_id')->nullable()->constrained('categories')->nullOnDelete()->onUpdate('no action');
            $table->foreignId('category_id')->nullable()->constrained()->nullOnDelete()->onUpdate('no action');
            $table->string('title');
            $table->string('slug');
            $table->string('image')->nullable();
            $table->boolean('status')->default(1);
            $table->longText('description')->nullable();
            $table->integer('position')->nullable();
           

            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('category_lists');
    }
};
