<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Venda extends Model
{
    use HasFactory;

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
        return $this->hasMany(ItemVenda::class);
    }
}