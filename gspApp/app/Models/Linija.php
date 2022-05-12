<?php

namespace App\Models;
 
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Linija extends Model
{
    use HasFactory;

    public function pocetnaDestinacija()
    {
        return $this->belongsTo(Destinacija::class);
    }
    public function krajnjaDestinacija()
    {
        return $this->belongsTo(Destinacija::class);
    }
    public function stanice()
    {
        return $this->hasMany(Stanica::class);
    }
}
