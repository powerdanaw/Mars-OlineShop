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
        Schema::create('baners', function (Blueprint $table) {
            $table->id();
            $table->string('image');
            $table->string('title');
            $table->string('body');
            $table->string('color');
            $table->text('url');
            $table->string('btn_name');
            $table->string('btn_color');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('baners');
    }
};
