<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Deals extends Model
{
    use HasFactory;

    protected $fillable  = ['title','pourcentage', 'description','endDate', 'picture'];

    public $timestamps = false;

    public function Balades()
    {
        return $this->hasMany(Balade::class);
    }
}
