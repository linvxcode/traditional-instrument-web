<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Latihan extends Model
{
    use HasFactory;
    // protected $fillable = ['text', 'tone', 'answer'];
    protected $guarded = ['id'];

    public function categoryLatihan()
    {
        return $this->belongsTo(CategoryLatihan::class);
    }

    public function getCategory()
    {
        return $this->categoryLatihan()->select('name', 'slug');
    }
}
