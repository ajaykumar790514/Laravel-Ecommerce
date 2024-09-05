<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Banner extends Model
{
    use HasFactory;
    protected $fillable = ['title', 'description', 'category_id', 'image', 'is_link', 'link', 'is_active'];

    public function category()
    {
        return $this->belongsTo(Category::class, 'category_id', 'id');
    }
}
