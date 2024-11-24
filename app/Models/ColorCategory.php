<?php

namespace App\Models;

use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\Storage;

class ColorCategory extends Model
{
    use HasFactory, SoftDeletes;
    use Sluggable;
    protected $fillable = [
        'color_name',
        'color_code_image',
        'slug',
        'position',
    ];
   

    protected function colorCodeImage(): Attribute
    {
        return Attribute::make(
            get: fn(?string $value) => $value ? Storage::disk('public')->url($value) : null,
            set: fn($value) => $value ? $value->store('colorCategorris', 'public') : null,
        );
    }

    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'color_name'
            ]
        ];
    }

    protected static function boot()
    {
        parent::boot();

        static::creating(function ($colorCategory) {
            $colorCategory->position = static::max('position') + 1;
        });
    }  
    
    public function colors()
    {
        return $this->hasMany(Color::class);
    }
  
}
