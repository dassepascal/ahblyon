<?php

namespace App\Models;

use App\Models\Photo;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Category extends Model
{
    use HasFactory;
    protected  $fillable = ['label'];

    public function photos(){
        return $this->hasMany(Photo::class);
    }
}
