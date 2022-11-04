<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Maintenance extends Model
{
    use HasFactory;
    protected $fillable = ['description', 'dateOfMaintenance','type','price', 'avalible', 'velo_id'];

    public function velo()
    {
        return $this->belongsTo(Velo::class);
    }
}
