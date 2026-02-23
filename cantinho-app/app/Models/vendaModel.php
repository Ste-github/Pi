<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use App\Models\itensvendaModel;

class vendaModel extends Model
{
    use HasFactory;
protected $table = 'vendas';
    protected $fillable = [
        'funcionario_id',
        'atendente_id',
        'cliente_id',
        'subtotal',
        'desconto',
        'total',
        'forma_pagamento',
        'data_venda',
    ];

    public function funcionario()
    {
        return $this->belongsTo(User::class, 'funcionario_id');
    }

    public function atendente()
    {
        return $this->belongsTo(User::class, 'atendente_id');
    }

    public function cliente()
    {
        return $this->belongsTo(Cliente::class);
    }

    public function itens()
    {
        return $this->hasMany(itensvendaModel::class, 'venda_id');
    }
}