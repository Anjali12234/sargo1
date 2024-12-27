<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\MorphTo;
use Illuminate\Database\Eloquent\SoftDeletes;

class Menu extends Model
{
    use HasFactory, SoftDeletes;   

    protected $fillable = [
        'model_type',
        'model_id',
        'menu_id',
        'title',      
        'position',
        'status',
        'type',
        'slug',
    ];
    protected static function boot()
    {
        parent::boot();

        static::creating(function ($menu) {
            $menu->position = static::max('position') + 1;
        });
    }
    public function menu(): BelongsTo
    {
        return $this->belongsTo(Menu::class);
    }

    public function children(): HasMany
    {
        return $this->hasMany(Menu::class);
    }

    public function model(): MorphTo
    {
        return $this->morphTo();
    }
}
