<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class parraine extends Model
{
    use HasFactory;
    protected $fillable = ['title','content'];
    public function dateFormated(){
        return date_format($this->created_at,'d-m-Y',);
    }
}
