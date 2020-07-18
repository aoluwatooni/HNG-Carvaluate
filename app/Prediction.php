<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Prediction extends Model
{
     // protected $table = 'predictions';

     protected $fillable = [
         'user_id','model', 'km', 'year', 'fuel', 'tt', 'seats', 'price'
     ];

     protected $hidden = [
        'created_at', 'updated_at'
    ];
}
