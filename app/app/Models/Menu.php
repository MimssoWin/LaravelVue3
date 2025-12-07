<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    protected $fillable = [
        'label',
        'url',
        'sort_order',
        'is_active',
    ];

}
