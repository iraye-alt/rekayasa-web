<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Artikel extends Model
{
    use HasFactory;

    protected $fillable = [
        'image',
        'title',
        'description',
        'kategori',
        'status',
    ];

    public function getImageUrlAttribute()
    {
        if ($this->image) {
            if (str_contains($this->image, '/')) {
                return asset('storage/' . $this->image);
            }
            return asset('images/' . $this->image);
        }
        return null;
    }
}