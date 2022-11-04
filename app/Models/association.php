<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Association extends Model
{
    use HasFactory;

    protected $fillable  = ['name', 'adresse', 'phone', 'description', 'email', 'picture','image','extension'];
    public $timestamps = false;

    public function reclamation()
	{
		return $this->hasMany(Reclamation::class);
	}
}
