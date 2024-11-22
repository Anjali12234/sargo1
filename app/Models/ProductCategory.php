<?php

namespace App\Models;

use App\Enums\ProductCategoryEnum;
use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\Storage;

class ProductCategory extends Model
{
    use HasFactory, SoftDeletes;
    use Sluggable;
    protected $fillable = [
        'title',
        'type',
        'image',
        'description',
        'slug',
        'position',
    ];
    protected $casts = [
        'type' => ProductCategoryEnum::class,
    ];
    protected function image(): Attribute
    {
        return Attribute::make(
            get: fn(?string $value) => $value ? Storage::disk('public')->url($value) : null,
            set: fn($value) => $value ? $value->store('productCategories', 'public') : null,
        );
    }
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

        static::creating(function ($productCategory) {
            $productCategory->position = static::max('position') + 1;
        });
    }

    public function products()
    {
        return $this->hasMany(Product::class);
    }

}
