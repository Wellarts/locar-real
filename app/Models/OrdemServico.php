<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrdemServico extends Model
{
    use HasFactory;

    protected $fillable = [
        'cliente_id',
        'fornecedor_id',
        'veiculo_id',
        'user_id',
        'data_emissao',
        'km_troca',
        'valor_total',
        'status',
        'forma_pagamento'
    ];

    public function cliente()
    {
        return $this->belongsTo(Cliente::class);
    }

    public function fornecedor()
    {
        return $this->belongsTo(Fornecedor::class);
    }

    public function veiculo()
    {
        return $this->belongsTo(Veiculo::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function itens()
    {
        return $this->hasMany(ItensOrdemServico::class);
    }

    public function formaPagamento()
    {
        return $this->belongsTo(FormaPagamento::class);
    }
}
