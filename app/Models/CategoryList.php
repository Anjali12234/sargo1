<?php

namespace App\Models;

use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\Storage;

class CategoryList extends Model
{
    use HasFactory,SoftDeletes, Sluggable;

    protected $fillable = [
        'super_category_id',
        'category_id',
        'title',        
        'status',
        'description',
        'image',
        'slug',
        'position',
        
    ];
    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'title'
            ]
        ];
    }

    protected static function boot()
    {
        parent::boot();

        static::creating(function ($categoryList) {
            $categoryList->position = static::max('position') + 1;
        });
    }
    protected function image(): Attribute
    {
        return Attribute::make(
            get: fn(?string $value) => $value ? Storage ::disk('public')->url($value) : null,
            set: fn($value) => $value ? $value->store('categoryList', 'public') : null,
        );
    }
    public function superCategory(): BelongsTo
    {
        return $this->belongsTo(Category::class, 'super_category_id');
    }

    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class,'category_id');
    }
}
