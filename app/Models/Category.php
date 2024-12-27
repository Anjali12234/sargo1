<?php

namespace App\Models;

use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Support\Facades\Storage;

class Category extends Model
{
    use HasFactory, SoftDeletes, Sluggable;
    protected $fillable = [
        'category_id',
        'title',
        'position',
        'slug',
        
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

        static::creating(function ($category) {
            $category->position = static::max('position') + 1;
        });
    }  
   
  

    public function categories(): HasMany
    {
        return $this->hasMany(Category::class, 'category_id');
    }

    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class, 'document_category_id');
    }

    public function superCategories(): HasMany
    {
        return $this->hasMany(CategoryList::class, 'super_category_id');
    }

    public function categoryLists(): HasMany
    {
        return $this->hasMany(CategoryList::class, 'category_id');
    }
}
