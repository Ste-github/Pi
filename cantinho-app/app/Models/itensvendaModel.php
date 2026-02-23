<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\produtosModel;
use App\Models\vendaModel;

class itensvendaModel extends Model
{
    use HasFactory;
    protected $table='itens_venda';
    
     protected $fillable = [
        'venda_id',
        'produto_id',
        'quantidade',
        'preco_unitario',
        'subtotal',
    ];

    public function venda()
    {
        return $this->belongsTo(Venda::class, 'venda_id');
    }

    public function produto()
    {
        return $this->belongsTo(produtosModel::class, 'produto_id');
    }
}

