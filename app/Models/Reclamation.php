<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reclamation extends Model
{  
    use HasFactory;
    protected $table = 'reclamation';

    protected $fillable  = ['sujet', 'description', 'email','association_id','status','priority'];
    public $timestamps = false;

    public function association()
	{
		return $this->belongsTo(Association::class);
	}
}
