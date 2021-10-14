<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Persona extends Model
{
    use HasFactory;
    protected $fillable = [
        'persona_id',
        'nombre',
        'apellido_paterno',
        'apellido_materno',
        'codigo',
        'correo',
        'telefono',
        'user_id'
    ];
    public function user(){
        return $this->belongsTo(User::class);
    }
    public function areas(){
        return $this->belongsToMany(Area::class);
    }
}
