<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class clientesModel extends Model
{
    use HasFactory;
    protected $table='clientes';
    
    protected $fillable = [
        'nome',
        'telefone',
        'email',
        'cpf',
        'saldo_devedor',
    ];

    public function vendas()
    {
        return $this->hasMany(Venda::class);
    }
}

