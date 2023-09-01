<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CategoryLatihan extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    public function latihan()
    {
        return $this->hasMany(Latihan::class);
    }
}
