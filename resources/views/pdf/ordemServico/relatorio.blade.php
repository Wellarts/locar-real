<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Relatório de Ordens de Serviço</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            color: #222;
            font-size: 13px;
            margin: 0;
            padding: 0;
            background: #fff;
        }
        .container {
            max-width: 100%;
            margin: 0 auto;
            background: #fff;
            border-radius: 12px;
            padding: 0;
            box-shadow: 0 2px 16px rgba(0, 0, 0, 0.07);
        }
        h1 {
            text-align: center;
            color: #2d3a4a;
            margin: 24px 0 24px 0;
            font-weight: 700;
            font-size: 1.3em;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 24px;
            background: #fff;
            border-radius: 8px;
        }
        th, td {
            padding: 10px;
            border-bottom: 1px solid #e9ecef;
            font-size: 12px;
        }
        th {
            background: #f2f2f4;
            color: #2d3a4a;
            font-weight: 600;
            text-align: right;
        }
        tr:last-child td {
            border-bottom: none;
        }
        td {
            color: #222;
        }
        .status-aberta {
            color: #ce3131;
            font-weight: 600;
        }
        .status-fechada {
            color: #38a169;
            font-weight: 600;
        }
        .status-cancelada {
            color: #e53e3e;
            font-weight: 600;
        }
    </style>
   <table>
            <tr>
                <td style="width: 20%;">
                    <img src="img/logo_real.png" alt="Logo" class="logo" style="max-width: 90px; height: auto;">
                </td>
                <td style="width: 80%; text-align: right;">
                    <strong style="font-size:1.2em;color:#000308;">REAL LOCAÇÕES E SERVIÇOS LTDA</strong><br>
                    <span style="color:#6b7280;">CNPJ: 12.874.349/0001-31<br>
                        Endereço: Rua Joaquim domingos Neto, 554, Centro-Horizonte. CE 62.880-168<br>
                        Contato: (85) 3411-8010<br>
                        Email: Comercial@reallocmotos.com.br</span>
                </td>
            <tr>
                <td colspan="4" style="text-align: right;">
                    <strong style="font-size:15px;color:#000510;">Relatório gerado em: </strong>                   
                    <span style="color:#6b7280; font-size: 15px">
                        {{\Carbon\Carbon::now()->format('d/m/Y H:i') }}</span>
                </td>
            </tr>
        </table>

</head>
<body>
    <div class="container">
        <h1>Relatório de Ordens de Serviço</h1>
        <table>
            <tr>
                <th style="text-align:left;">#</th>
                <th style="text-align:left;">Cliente</th>
                <th style="text-align:left;">Fornecedor</th>
                <th style="text-align:left;">Veículo</th>
                <th style="text-align:left;">Data de Emissão</th>
                <th style="text-align:left;">Autorizado Por</th>
                <th style="text-align:left;">Status</th>
                <th style="text-align:left;">Valor Total</th>
            </tr>
            @foreach($ordemServicoRelatorio as $ordem)
            <tr>
                <td>{{ $ordem->id }}</td>
                <td>{{ $ordem->cliente->nome ?? '' }}</td>
                <td>{{ $ordem->fornecedor->nome ?? '' }}</td>
                <td>{{ $ordem->veiculo->modelo ?? '' }} - {{ $ordem->veiculo->placa ?? '' }} - {{$ordem->veiculo->cor ?? ''}}</td>
                <td>{{ \Carbon\Carbon::parse($ordem->data_emissao ?? $ordem->data_abertura)->format('d/m/Y') }}</td>
                <td>{{ $ordem->user->name ?? '' }}</td>
                <td>
                    @if(isset($ordem->status))
                        @if($ordem->status == 0 || $ordem->status == 'pendente' || $ordem->status == 'aberta')
                            <span class="status-aberta">Pendente</span>
                        @elseif($ordem->status == 1 || $ordem->status == 'concluida' || $ordem->status == 'fechada')
                            <span class="status-fechada">Concluído</span>
                        @else
                            <span class="status-cancelada">Cancelada</span>
                        @endif
                    @endif
                </td>
                <td>R$ {{ number_format($ordem->valor_total ?? $ordem->valor, 2, ',', '.') }}</td>
            </tr>
            @if(isset($ordem->itens) && count($ordem->itens))
                <tr>
                    <td colspan="6" style="padding:0;">
                        <table style="width:100%; margin-bottom:0; background:#f9f9fa; border-radius:6px;">
                            <tr>
                                <th style="text-align:left; font-size:12px;">Categoria</th>
                                <th style="text-align:left; font-size:12px;">Tipo</th>
                                <th style="text-align:left; font-size:12px;">Peça/Serviço</th>
                                <th style="text-align:left; font-size:12px;">Descrição</th>
                                <th style="text-align:center; font-size:12px;">Qtd</th>
                                <th style="text-align:left; font-size:12px;">V. Unitário</th>
                                <th style="text-align:left; font-size:12px;">V. Total</th>
                            </tr>
                            @php
                                $totalPreventiva = 0;
                                $totalCorretiva = 0;
                            @endphp
                            @foreach($ordem->itens as $item)
                                @php
                                    if($item->tipo == 1) {
                                        $totalPreventiva += $item->valor_total;
                                    } elseif($item->tipo == 2) {
                                        $totalCorretiva += $item->valor_total;
                                    }
                                @endphp
                            <tr>
                                <td style="font-size:11px;">{{ $item->pecaServico->tipo == 1 ? 'Serviço' : 'Peça' ?? '' }}</td>
                                <td style="font-size:11px;">{{ $item->tipo == 1 ? 'Preventiva' : 'Corretiva' ?? '' }}</td>
                                <td style="font-size:11px;">{{ $item->pecaServico->nome ?? '' }}</td>
                                <td style="font-size:11px;">{{ $item->descricao }}</td>
                                <td style="text-align:center; font-size:11px;">{{ $item->quantidade }}</td>
                                <td style="font-size:11px;">R$ {{ number_format($item->valor_unitario, 2, ',', '.') }}</td>
                                <td style="font-size:11px;">R$ {{ number_format($item->valor_total, 2, ',', '.') }}</td>
                            </tr>
                            @endforeach
                            <tr>
                                <td colspan="7" style="text-align:right; font-size:13px; background:#f2f2f4;">
                                    <strong>Total Preventiva:</strong> R$ {{ number_format($totalPreventiva, 2, ',', '.') }} &nbsp; | &nbsp;
                                    <strong>Total Corretiva:</strong> R$ {{ number_format($totalCorretiva, 2, ',', '.') }}
                                </td>
                            </tr>
                        </table>
                    </td>
                </tr>
            @else
                <tr>
                    <td colspan="6" style="padding-left:24px; background:#f9f9fa;"><em>Sem itens</em></td>
                </tr>
            @endif
            @endforeach
        </table>
        @php
            $totaisVeiculo = [];
            $totaisCliente = [];
            $totaisFornecedor = [];
            $totalPreventivaGeral = 0;
            $totalCorretivaGeral = 0;
            foreach($ordemServicoRelatorio as $ordem) {
                $valorTotal = $ordem->valor_total ?? $ordem->valor ?? 0;
                $veiculoKey = ($ordem->veiculo->modelo ?? '') . ' ' . ($ordem->veiculo->placa ?? '');
                $clienteKey = $ordem->cliente->nome ?? '';
                $fornecedorKey = $ordem->fornecedor->nome ?? '';
                $totaisVeiculo[$veiculoKey] = ($totaisVeiculo[$veiculoKey] ?? 0) + $valorTotal;
                $totaisCliente[$clienteKey] = ($totaisCliente[$clienteKey] ?? 0) + $valorTotal;
                $totaisFornecedor[$fornecedorKey] = ($totaisFornecedor[$fornecedorKey] ?? 0) + $valorTotal;
                if(isset($ordem->itens) && count($ordem->itens)) {
                    foreach($ordem->itens as $item) {
                        if($item->tipo == 1) {
                            $totalPreventivaGeral += $item->valor_total;
                        } elseif($item->tipo == 2) {
                            $totalCorretivaGeral += $item->valor_total;
                        }
                    }
                }
            }
        @endphp
        <table style="margin-top:32px;">
            <tr>
                <td colspan="2" style="font-size:15px; background:#f2f2f4; padding:10px;"><strong>Totais por Veículo:</strong></td>
            </tr>
            @foreach($totaisVeiculo as $veiculo => $total)
            <tr>
                <td style="padding-left:24px;">{{ $veiculo }}</td>
                <td style="text-align:right;">R$ {{ number_format($total, 2, ',', '.') }}</td>
            </tr>
            @endforeach
            <tr><td colspan="2" style="height:12px;"></td></tr>
            <tr>
                <td colspan="2" style="font-size:15px; background:#f2f2f4; padding:10px;"><strong>Totais por Cliente:</strong></td>
            </tr>
            @foreach($totaisCliente as $cliente => $total)
            <tr>
                <td style="padding-left:24px;">{{ $cliente }}</td>
                <td style="text-align:right;">R$ {{ number_format($total, 2, ',', '.') }}</td>
            </tr>
            @endforeach
            <tr><td colspan="2" style="height:12px;"></td></tr>
            <tr>
                <td colspan="2" style="font-size:15px; background:#f2f2f4; padding:10px;"><strong>Totais por Fornecedor:</strong></td>
            </tr>
            @foreach($totaisFornecedor as $fornecedor => $total)
            <tr>
                <td style="padding-left:24px;">{{ $fornecedor }}</td>
                <td style="text-align:right;">R$ {{ number_format($total, 2, ',', '.') }}</td>
            </tr>
            @endforeach
            <tr><td colspan="2" style="height:12px;"></td></tr>
            <tr>
                <td style="font-size:15px; background:#f2f2f4; padding:10px;"><strong>Total Geral Preventiva:</strong></td>
                <td style="text-align:right; font-size:15px; background:#f2f2f4; padding:10px;">R$ {{ number_format($totalPreventivaGeral, 2, ',', '.') }}</td>
            </tr>
            <tr>
                <td style="font-size:15px; background:#f2f2f4; padding:10px;"><strong>Total Geral Corretiva:</strong></td>
                <td style="text-align:right; font-size:15px; background:#f2f2f4; padding:10px;">R$ {{ number_format($totalCorretivaGeral, 2, ',', '.') }}</td>
            </tr>
            <tr>
                <td colspan="2" style="text-align: right; font-size: 16px; padding-top:16px;"><strong>Total de Ordens:</strong>
                <strong>{{ $ordemServicoRelatorio->count() }}</strong></td>
            </tr>
        </table>
    </div>
</body>
</html>