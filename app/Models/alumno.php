<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class alumno extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $primaryKey = 'id_alumno';
    public function inscripcion()
    {
        return $this->hasOne(inscripcion::class);
    }
}
