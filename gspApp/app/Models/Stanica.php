<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Stanica extends Model
{
    use HasFactory;


    public function linije()
    {
        return $this->hasMany(Linija::class);
    }




}