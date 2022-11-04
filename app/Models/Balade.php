<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Balade extends Model
{
    use HasFactory;
    protected $fillable  = ['title', 'description', 'location', 'date', 'duration', 'picture'];
    public $timestamps = false;

    public function Programmes()
    {
        return $this->hasOne(Programme::class);
    }

    public function Deals()
    {
        return $this->belongsTo(Deals::class);
    }
}
