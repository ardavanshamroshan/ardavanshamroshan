<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Profile extends Model
{
    protected $fillable = [
        'full_name',
        'email',
        'phone',
        'address',
        'birth_date',
        'marital_status',
        'military_status',
        'professional_summary',
        'photo_path',
        'is_active',
        'order',
    ];

    protected function casts(): array
    {
        return [
            'birth_date' => 'date',
            'is_active' => 'boolean',
            'order' => 'integer',
        ];
    }

    public static function active(): ?self
    {
        return self::where('is_active', true)
            ->orderBy('order')
            ->first();
    }
}
