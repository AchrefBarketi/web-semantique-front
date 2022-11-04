<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Velo extends Model
{
    use HasFactory;
    protected $fillable = ['model', 'code', 'price_hour','status', 'disponibility', 'type', 'picture'];

    public $timestamps = false;
    public function maintenances()
    {
        return $this->hasMany(Maintenance::class);
    }

}
