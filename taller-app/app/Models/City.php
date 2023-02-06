<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    protected $fillable = [
        'name',
        'description'
    ];

    //Relación 1-n con branches - users
     public function people()
     {
         return $this->hasMany(Person::class);
     }
}
