<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Voucher extends Model
{
    protected $table = 'voucher';
    public $timestamps = true;
    protected $fillable = ['title','descript', 'name','status','maximum','voucher_code','voucher_price','description','expiry_period'];
    use HasFactory;
}
