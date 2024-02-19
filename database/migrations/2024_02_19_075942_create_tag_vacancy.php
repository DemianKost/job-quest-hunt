<?php

declare(strict_types=1);

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('tag_vacancy', static function (Blueprint $table): void {
            $table->foreignUuid('tag_id')
                ->index()
                ->constrained()
                ->cascadeOnDelete();
            $table->foreignUuid('vacancy_id')
                ->index()
                ->constrained()
                ->cascadeOnDelete();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('tag_vacancy');
    }
};
