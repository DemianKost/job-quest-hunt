<?php

namespace App\Models;

use App\Enums\TagType;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Tag extends Model
{
    use HasFactory;
    use HasUuids;

    /**
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'type'
    ];

    /**
     * @var array<string, string>
     */
    protected $casts = [
        'type' => TagType::class
    ];

    /**
     * @return BelongsToMany
     */
    public function vacancies(): BelongsToMany
    {
        return $this->belongsToMany( Vacancy::class );
    }
}
