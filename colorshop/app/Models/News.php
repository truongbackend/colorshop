<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    protected $table = 'news';
    public $timestamps = true;
    protected $fillable = ['name','image', 'status','title','type','detail'];
    use HasFactory;

}
