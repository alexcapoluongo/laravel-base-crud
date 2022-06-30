<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comic extends Model
{
    //
    protected $fillable = [
        'title',
        'price',
        'image',
        'type',
        'sale_date',
        'description',
    ];
}
