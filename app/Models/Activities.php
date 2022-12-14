<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Activities extends Model
{
    use HasFactory;

    protected $fillable  = ['title','time', 'details'];

    public $timestamps = false;

    public function Programmes()
    {
        return $this->belongsTo(Programme::class);
    }
}
