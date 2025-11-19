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
    Schema::create('users', function (Blueprint $table) {
        $table->id();
        $table->string('username');
        $table->string('email')->unique();
        $table->string('password');

        // SQLite-friendly timestamps
        $table->text('created_at')->default(DB::raw("(datetime('now'))"));
        $table->text('updated_at')->default(DB::raw("(datetime('now'))"));
    });
}

public function down(): void
{
    Schema::dropIfExists('users');
}
};
