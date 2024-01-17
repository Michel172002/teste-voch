<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CargoColaborador extends Model
{
    use HasFactory;

    public function cargo()
    {
        return $this->belongsTo(Cargo::class);
    }

    public function Colaborador()
    {
        return $this->belongsTo(Colaborador::class);
    }
}
