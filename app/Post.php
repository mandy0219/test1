<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $table = 'posts';

    protected $fillable = [
        'year',
        'month',
        'day',
        '出發',
        '抵達',
    ];
}
