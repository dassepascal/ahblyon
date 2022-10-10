<?php

namespace App\Models;

use App\Models\Category;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Photo extends Model
{
    use HasFactory;
    protected $fillable = ['name','path','category_id'];
    public function dateFormated(){
        return date_format($this->created_at,'d-m-Y',);
    }

    public function category(){
        return $this->belongsTo(Category::class);
    }
}
