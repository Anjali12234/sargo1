<?php

namespace App\Models;

use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WhyChoose extends Model
{
    /** @use HasFactory<\Database\Factories\WhyChooseFactory> */
    use Sluggable;
    protected $fillable = [
        'title',
        'description',
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
}
