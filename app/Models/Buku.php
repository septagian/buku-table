<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Category;

class Buku extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'category_id', 'deskripsi'];
    protected $guarded = ['id'];

    public function index()
    {
        return $this->belongsTo(Buku::class);
    }
    public function Category()
    {
        return $this->belongsTo( Category::class, 'category_id' );
    }

}
