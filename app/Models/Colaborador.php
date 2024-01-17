<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Colaborador extends Model
{
    use HasFactory;
    protected $table = 'colaboradores';
    public function unidade()
    {
        return $this->belongsTo(Unidade::class);
    }

    public function cargoColaborador()
    {
        return $this->belongsTo(CargoColaborador::class);
    }
}
