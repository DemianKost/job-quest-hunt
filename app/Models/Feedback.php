<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Feedback extends Model
{
    use HasFactory;
    use HasUuids;

    /**
     * @var array<int, string>
     */
    protected $fillable = [
        'cover_letter',
        'vacancy_id',
        'user_id'
    ];

    /**
     * @return BelongsTo
     */
    public function vacancy(): BelongsTo
    {
        return $this->belongsTo( Vacancy::class, 'vacancy_id' );
    }

    /**
     * @return BelongsTo
     */
    public function author(): BelongsTo
    {
        return $this->belongsTo( User::class, 'user_id' );
    }
}
