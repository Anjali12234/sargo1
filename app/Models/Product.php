<?php

namespace App\Models;

use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\Storage;

class Product extends Model
{
    use HasFactory, SoftDeletes;
    use Sluggable;
    protected $fillable = [
        'product_category_id',
        'title',
        'image',
        'slug',
        'description',
        'position',
        'bg_image',
        'bg_title',
    ];

    protected function image(): Attribute
    {
        return Attribute::make(
            get: fn(?string $value) => $value ? Storage::disk('public')->url($value) : null,
            set: fn($value) => $value ? $value->store('products', 'public') : null,
        );
    }
    protected function bgImage(): Attribute
    {
        return Attribute::make(
            get: fn(?string $value) => $value ? Storage::disk('public')->url($value) : null,
            set: fn($value) => $value ? $value->store('products', 'public') : null,
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

        static::creating(function ($product) {
            $product->position = static::max('position') + 1;
        });
    }

    public function ProductCategory()
    {
        return $this->belongsTo(ProductCategory::class);
    }

    public function productKeyFeatures()
    {
        return $this->hasMany(ProductKeyFeature::class);
    }

    public function productSteps()
    {
        return $this->hasMany(ProductStep::class);
    }
}
