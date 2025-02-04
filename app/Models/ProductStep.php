<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\Storage;

class ProductStep extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'product_id',
        'step_no',
        'step_name',
        'image',
        'product_name',
        'coat'
    ];

    // protected function image(): Attribute
    // {
    //     return Attribute::make(
    //         get: fn(?string $value) => $value ? Storage::disk('public')->url($value) : null,
    //         set: fn($value) => $value ? $value->store('productStep', 'public') : null,
    //     );
    // }

    public function setImageAttribute($value)
    {
        if (!empty($value) && !is_string($value)) {
            $this->attributes['image'] = $value->store('productSteps/image', 'public');
        }
    }

    public function getImageUrlAttribute()
    {
        return $this->attributes['image'] ? Storage::disk('public')->url($this->attributes['image']) : '';
    }


    public function Product()
    {
        return $this->belongsTo(Product::class);
    }
   

}
