<?php

namespace App\Models;

use App\Enums\ColorTypeEnum;
use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\Storage;

class Color extends Model
{
    use HasFactory, SoftDeletes;
    use Sluggable;
    protected $fillable = [
        'type',
        'name',
        'color_code',
        'slug',
        'description',
        'position',
    ];
    protected $casts = [
        'type' => ColorTypeEnum::class,
    ];

    protected function image(): Attribute
    {
        return Attribute::make(
            get: fn(?string $value) => $value ? Storage::disk('public')->url($value) : null,
            set: fn($value) => $value ? $value->store('colors', 'public') : null,
        );
    }

    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'name'
            ]
        ];
    }

    protected static function boot()
    {
        parent::boot();

        static::creating(function ($color) {
            $color->position = static::max('position') + 1;
        });
    }   
    public function files()
    {
        return $this->morphMany(File::class, 'model');
    }
}
