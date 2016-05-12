<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Lists extends Model
{
    protected $table = 'List';

    protected $fillable = [
        'listName', 'description', 
    ];

}
