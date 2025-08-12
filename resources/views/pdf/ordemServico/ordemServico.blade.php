<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <title>Ordem de Serviço</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            color: #222;
            font-size: 13px;
            margin: 0;
            padding: 0%;
        }

        .container {
            max-width: 100%;
            margin: 0%;
            background: #fff;
            border-radius: 12px;
            padding: 0%;
            box-shadow: 0 2px 16px rgba(0, 0, 0, 0.07);
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 24px;
            background: #fff;
            border-radius: 8px;
        }

        th,
        td {
            padding: 10px;
            border-bottom: 1px solid #e9ecef;
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

        .logo {
            max-width: 120px;
            border-radius: 6px;
        }

        .signature {
            margin-top: 32px;
            display: flex;
            gap: 48px;
            justify-content: center;
        }

        .signature-box {
            flex: 1;
            text-align: center;
        }

        .signature-line {
            border-bottom: 2px solid #b0b7c3;
            margin: 0 auto 8px auto;
            width: 80%;
            height: 32px;
            display: block;
        }

        .right {
            text-align: right;
        }
    </style>
</head>

<body>
    <div class="container">
        <!-- Cabeçalho -->
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
                    <strong style="font-size:12pt;color:#000510;">Ordem de Serviço: </strong>
                    <span style="color:#6b7280;">OS - 00{{ $ordemServico->id }}</span><br>
                    <span style="color:#6b7280;">Data:
                        {{ \Carbon\Carbon::parse($ordemServico->data_emissao)->format('d/m/Y') }}</span>
                </td>
            </tr>
        </table>

        <!-- Dados da Ordem de Serviço -->
        <fieldset style="border:1px solid #b0b7c3; border-radius:8px; padding:16px; margin-bottom:24px;">
            <legend style="font-weight:bold; color:#2d3a4a; padding:0 8px;">Dados da Ordem de Serviço</legend>
            <table>
                <tr>
                    <th>Cliente (Contrato):</th>
                    <td colspan="5" style="font-size: 12px">{{ $ordemServico->cliente->nome ?? '' }}</td>

                </tr>
                <tr>
                    <th>Fornecedor:</th>
                    <td style="font-size: 12px">{{ $ordemServico->fornecedor->nome ?? '' }}</td>
                    <th>Cidade:</th>
                    <td style="font-size: 12px">{{ $ordemServico->fornecedor->Cidade->nome ?? '' }}</td>
                    <th>Estado:</th>
                    <td style="font-size: 12px">{{ $ordemServico->fornecedor->Estado->nome ?? '' }}</td>
                </tr>
                <tr>
                    <th>Veículo:</th>
                    <td style="font-size: 12px">{{ $ordemServico->veiculo->modelo ?? '' }}</td>
                    <th>Placa:</th>
                    <td style="font-size: 12px">{{ $ordemServico->veiculo->placa ?? '' }}</td>
                    <th>Cor:</th>
                    <td style="font-size: 12px">{{ $ordemServico->veiculo->cor ?? '' }}</td>
                    

                </tr>
                <tr>
                    <th>Km Troca:</th>
                    <td style="font-size: 12px">{{ $ordemServico->km_troca }}</td>
                    <th>Autorizado por:</th>
                    <td colspan="2" style="font-size: 12px">{{ $ordemServico->user->name ?? '' }}</td>
                </tr>
            </table>
        </fieldset>

        <!-- Itens da OS -->
        <fieldset style="border:1px solid #b0b7c3; border-radius:8px; padding:16px; margin-bottom:24px;">
            <legend style="font-weight:bold; color:#2d3a4a; padding:0 8px;">Itens da Ordem de Serviço</legend>
            <table>
                <tr>
                    <th style="text-align:left; font-size: 12px">#</th>
                    <th style="text-align:left; font-size: 12px">Categoria</th>
                    <th style="text-align:left; font-size: 12px">Tipo</th>
                    <th style="text-align:left; font-size: 12px">Peça/Serviço</th>
                    <th style="text-align:left; font-size: 12px">Descrição</th>
                    <th style="text-align:left; font-size: 12px">Qtd</th>
                    <th style="text-align:left; font-size: 12px">V. Unitário</th>
                    <th style="text-align:left; font-size: 12px">V. Total</th>
                </tr>
                @foreach ($ordemServico->itens as $index => $item)
                    <tr>
                        <td style="font-size: 11px">{{ $index + 1 }}</td>
                        <td style="font-size: 11px">{{ $item->pecaServico->tipo == 1 ? 'Peça' : 'Serviço' ?? '' }}</td>
                        <td style="font-size: 11px">{{ $item->tipo == 1 ? 'Preventiva' : 'Corretiva' ?? '' }}</td>
                        <td style="font-size: 11px">{{ $item->pecaServico->nome ?? '' }}</td>
                        <td style="font-size: 11px">{{ $item->descricao }}</td>
                        <td style="text-align:center; font-size: 11px">{{ $item->quantidade }}</td>
                        <td style="font-size: 11px">R$ {{ number_format($item->valor_unitario, 2, ',', '.') }}</td>
                        <td style="font-size: 11px">R$ {{ number_format($item->valor_total, 2, ',', '.') }}</td>
                    </tr>
                @endforeach
                
            </table>
            <table>
                <tr>
                    <td style="text-align: right; font-size: 16px"><strong>Total Geral:</strong>
                   <strong>R$ {{ number_format($ordemServico->valor_total, 2, ',', '.') }}</strong></td>
                </tr>
            </table>

        </fieldset>

        <!-- Assinaturas
        <div class="signature">
            <div class="signature-box">
                <span class="signature-line"></span>
                Assinatura do Cliente
            </div>
            <div class="signature-box">
                <span class="signature-line"></span>
                Assinatura da Empresa
            </div>
        </div>
    </div> -->
</body>

</html>
