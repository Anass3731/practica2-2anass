<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use App\Models\Ttipos_motor;

class tcoches extends Model
{
    use HasFactory;

    public $timestamps = false;
    protected $primaryKey = 'matricula';
    protected $keyType = 'string';    
    public $incrementing = false;

   protected $fillable = ['matricula', 'marca', 'modelo', 'anyo', 'color', 'ttipos_motor_id'];

public function tipoMotor() {
    return $this->belongsTo(Ttipos_motor::class, 'ttipos_motor_id');
}

public function extras() {
    return $this->belongsToMany(Textra::class, 'coche_extra', 'coche_matricula', 'extra_id');
}

    }