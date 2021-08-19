<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class product extends Model
{
    use HasFactory;

    protected $fillable = [
     'category_id', 
     'unicode',
     'slug',
     'title',
     'description', 
     'order', 
     'status',
     'prc',
     'cid'
    ];


 
}
