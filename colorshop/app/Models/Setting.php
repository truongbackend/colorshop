<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
    protected $table = 'setting';
    public $timestamps = true;
    protected $fillable = ['name','logo','photo', 'phone','description','address','email'];
    use HasFactory;
}
