<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class todo extends Model
{
     protected $fillable = [
        'todo', 'date', 'time', 'created_at'
    ];
}
