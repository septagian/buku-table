<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Buku;

class Category extends Model
{
    use HasFactory;
    protected $fillable =['name'];
    protected $guarded = ['id'];


    public function index()
    {
        return $this->belongsTo(Buku::class);
    }
}
