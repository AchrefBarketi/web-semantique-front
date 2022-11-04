<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Programme extends Model
{
    use HasFactory;

    protected $fillable  = ['title','startingPoint', 'departureTime', 'remarks'];

    public $timestamps = false;


    public function Activities()
    {
        return $this->hasMany(Activities::class);
    }

    public function Balades()
    {
        return $this->belongsTo(Balade::class);
    }
}
