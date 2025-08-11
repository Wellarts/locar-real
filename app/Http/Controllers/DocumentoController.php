<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;
use App\Models\OrdemServico;

class DocumentoController extends Controller
{
    public function ordemServico($id)
    {
        $ordemServico = OrdemServico::findOrFail($id);
        $pdf = PDF::loadView('pdf.ordemServico.ordemServico', compact('ordemServico'));
        return $pdf->stream('ordem_servico.pdf');
    }

    public function ordemServicoRelatorio(Request $request)
    {
        $query = OrdemServico::query();
        if ($request->filled('cliente_id')) {
            $query->where('cliente_id', $request->cliente_id);
        }
        if ($request->filled('veiculo_id')) {
            $query->where('veiculo_id', $request->veiculo_id);
        }
        if ($request->filled('fornecedor_id')) {
            $query->where('fornecedor_id', $request->fornecedor_id);
        }
        if ($request->filled('status')) {
            $query->where('status', $request->status);
        }
        if ($request->filled('data_inicio')) {
            $query->whereDate('data_emissao', '>=', $request->data_inicio);
        }
        if ($request->filled('data_fim')) {
            $query->whereDate('data_emissao', '<=', $request->data_fim);
        }
        $ordemServicoRelatorio = $query->get();
        $pdf = PDF::loadView('pdf.ordemServico.relatorio', compact('ordemServicoRelatorio'))
            ->setPaper('a4', 'landscape');
        return $pdf->stream('ordem_servico_relatorio.pdf');
    }
}
