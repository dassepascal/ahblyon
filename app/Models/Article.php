<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Article extends Model
{
    use HasFactory;
    protected $fillable =[ 'title','subtitle','content'];

    public function dateFormated(){
        return date_format($this->created_at,'d-m-Y',);
    }

}
