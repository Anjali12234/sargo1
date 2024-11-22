<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\Storage;
use Illuminate\Database\Eloquent\Casts\Attribute;

class ProductKeyFeature extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'product_id',
        'service_id',
        'feature',
    ];

    protected function image(): Attribute
    {
        return Attribute::make(
            get: fn(?string $value) => $value ? Storage::disk('public')->url($value) : null,
            set: fn($value) => $value ? $value->store('productKeyFeature', 'public') : null,
        );
    }


    public function Product()
    {
        return $this->belongsTo(Product::class);
    }
    public function service()
    {
        return $this->belongsTo(Service::class);
    }

   
}
