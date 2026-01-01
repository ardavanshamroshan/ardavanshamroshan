<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Project extends Model
{
    protected $fillable = [
        'title',
        'description',
        'detailed_description',
        'image_url',
        'category',
        'client_name',
        'project_date',
        'live_url',
        'github_url',
        'features',
        'role',
        'order',
        'is_featured',
    ];

    protected function casts(): array
    {
        return [
            'project_date' => 'date',
            'is_featured' => 'boolean',
            'order' => 'integer',
        ];
    }

    public function skills(): BelongsToMany
    {
        return $this->belongsToMany(Skill::class)->withTimestamps();
    }

    public function scopeOrdered($query)
    {
        return $query->orderBy('order')->orderByDesc('project_date');
    }

    public function scopeFeatured($query)
    {
        return $query->where('is_featured', true);
    }
}
