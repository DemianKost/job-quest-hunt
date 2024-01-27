<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('feedback', static function (Blueprint $table): void {
            $table->uuid('id')->primary();
            $table->text('cover_letter');
            $table->foreignUuid('vacancy_id')
                ->index()
                ->constrained()
                ->cascadeOnDelete();
            $table->foreignUuid('user_id')
                ->index()
                ->constrained()
                ->cascadeOnDelete();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('feedback');
    }
};
