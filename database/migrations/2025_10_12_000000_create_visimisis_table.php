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
        Schema::create('visimisis', function (Blueprint $table) {
            $table->id();
            $table->string('title')->nullable();
            $table->string('subtitle')->nullable();
            $table->text('description')->nullable();
            $table->string('visi_title')->nullable();
            $table->text('visi_content')->nullable();
            $table->string('misi_title')->nullable();
            $table->text('misi_content')->nullable();
            $table->string('item1_icon')->nullable();
            $table->string('item1_title')->nullable();
            $table->text('item1_content')->nullable();
            $table->string('item2_icon')->nullable();
            $table->string('item2_title')->nullable();
            $table->text('item2_content')->nullable();
            $table->string('item3_icon')->nullable();
            $table->string('item3_title')->nullable();
            $table->text('item3_content')->nullable();
            $table->string('item4_icon')->nullable();
            $table->string('item4_title')->nullable();
            $table->text('item4_content')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('visimisis');
    }
};
