<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class sales extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'orid',
        'product_id',
        'code',
        'prc',
        'cid',
        'sale_date',
    ];
}
