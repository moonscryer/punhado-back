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
    Schema::create('characters', function (Blueprint $table) {
        $table->id();
        $table->string('name');
        $table->string('player');
        $table->string('image')->nullable();
        $table->text('description')->nullable();

        $table->unsignedBigInteger('game_id');

        $table->text('created_at')->default(DB::raw("(datetime('now'))"));
        $table->text('updated_at')->default(DB::raw("(datetime('now'))"));

        $table
            ->foreign('game_id')
            ->references('id')
            ->on('games')
            ->onDelete('cascade');
    });
}

public function down(): void
{
    Schema::dropIfExists('characters');
}
};
