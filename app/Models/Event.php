<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use HasFactory;
    protected $fillable  = ['title', 'description', 'location', 'start_date', 'end_date', 'picture'];
    public $timestamps = false;

    public function Programmes()
    {
        return $this->hasOne(Programme::class);
    }

    public function Comments()
    {
        return $this->hasMany(Comments::class);
    }

    public function Association()
    {
        return $this->belongsTo(association::class);
    }

}

