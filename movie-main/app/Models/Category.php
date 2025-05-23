<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    protected $guarded= [];
    protected $table = 'categories';
    protected $fillable = [
        'nama_kategori',
        'keterangan',
    ];

    public function movie()
    {
        return $this->hasMany(Category::class);
    }
}
