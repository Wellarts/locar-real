<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ItensOrdemServico extends Model
{
    use HasFactory;

    protected $fillable = [
        'ordem_servico_id',
        'peca_servico_id',
        'quantidade',
        'tipo',
        'descricao',
        'valor_unitario',
        'valor_total',
    ];

    public function ordemServico()
    {
        return $this->belongsTo(OrdemServico::class);
    }

    public function pecaServico()
    {
        return $this->belongsTo(PecaServico::class);
    }
}
