<?php

namespace App\Models;

use App\Enums\ServiceType;
use App\Enums\SliderTypeEnum;
use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\Storage;

class Service extends Model
{
    use HasFactory, SoftDeletes;
    use Sluggable;
    protected $fillable = [
        'title',
        'type',
        'image',
        'bg_image',
        'description',
        'slug',
        'position',
        'slider_page',

        
    ];
    protected $casts = [
        'slider_page' => SliderTypeEnum::class,
        'type' => ServiceType::class,
    ];
    protected function image(): Attribute
    {
        return Attribute::make(
            get: fn(?string $value) => $value ? Storage::disk('public')->url($value) : null,
            set: fn($value) => $value ? $value->store('services', 'public') : null,
        );
    }
    protected function bgImage(): Attribute
    {
        return Attribute::make(
            get: fn(?string $value) => $value ? Storage::disk('public')->url($value) : null,
            set: fn($value) => $value ? $value->store('services', 'public') : null,
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
}
