<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    protected $table = 'contact';
    public $timestamps = true;
    protected $fillable = ['name','phone', 'email','message'];
    use HasFactory;
}
?>
