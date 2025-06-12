<!DOCTYPE html>
<html>
<head>

<style>
    .retangulo {
        width: 100%;
        height: 2.5%;
        background-color: rgb(222, 225, 226);
        display: flex;
        align-items: center;
        text-align: center;
    }
    .texto {
        margin: auto;
        font-weight: bold;
        font-size: 16px;

    }
    .tabelas {
        border: 1px;
        border-style: solid;
        border-color: grey;
        width: 100%;
        border-collapse: collapse;
    }


    #ficha td {
    border: 1px solid rgb(160 160 160);
    padding: 0px 2px;
    }


    .tx {
        line-height:1.5;
        font-size: 15px;
    }

</style>

<style>
    .tela {
        width: 100%;
        height: 100px;
        border: 0px solid black;
        float: center;
        text-align: center;

    }
</style>

</head>
<body>

<table style="width: 100%">
  <tr>
    <td><img src="{{ asset('img/logo.png') }}" alt="Image" height="60" width="180"></td>
    <td> <p style="width: 100%; font-size:28px; font-weight: bold;" align="center">KLVIDAL LOCAÇÃO DE VEÍCULOS</p>
         <p style="font-size:16px;" align="center">Avenida Presidente Costa e Silva, 1460 - Helena Maria<br>
                                                            Osasco - SP - CEP: 06253-000 - Contato: (11) 97049-3745<br>
                                                            Email: comercial@vrumloc.com.br - CNPJ: 41.110.090/0001-50<br>
                                                           </p>
    </td>
  
</tr>
</table>
</table>
<div class="retangulo">
    <span class="texto">FICHA DE LOCAÇÃO</span>
</div>
<table>
</table>
<div class="retangulo">
<span class="texto">LOCATÁRIO</span>
</div>

<table class="tabelas" width="100%" id='ficha'>
<tr>
    <td colspan="2">
        <b class="tx">Nome:</b> {{$locacao->Cliente->nome}}</p>
    </td>
</tr>
<tr>
    <td colspan="2">
        <b class="tx">Endereço:</b>  {{$locacao->Cliente->endereco}}
    </td>
<tr>
    <td>
        <b class="tx">Cidade:</b> {{$locacao->Cliente->Cidade->nome}}
    </td>
    <td>
        <b class="tx">UF:</b> {{$locacao->Cliente->Estado->nome}}
    </td>
</tr>
<tr>
    <td>
        <b class="tx">Rg:</b> {{$locacao->Cliente->rg}}
    </td>
    <td>
        <b class="tx">Org Exp:</b> {{$locacao->Cliente->exp_rg}}
    </td>

</tr>
<tr>
    <td>
        <b class="tx">Telefones:</b>  {{$tel_1.' - '.$tel_2}}
    </td>
    <td>
        <b class="tx">CPF/CNPJ:</b> {{$cpfCnpj}}
    </td>
</tr>

</table>
</table>
<div class="retangulo">
<span class="texto">VEÍCULO</span>
</div>
<table class="tabelas" id='ficha'>
<tr>
    <td>
        <b class="tx">Marca:</b> {{$locacao->Veiculo->Marca->nome}}
    </td>
    <td>
        <b class="tx">Modelo:</b> {{$locacao->Veiculo->modelo}}
    </td>
    <td>
        <b class="tx">Chassi:</b> {{$locacao->Veiculo->chassi}}
    </td>
</tr>
<tr>
    <td>
        <b class="tx">Ano:</b>  {{$locacao->Veiculo->ano}}
    </td>
    <td>
        <b class="tx">Cor:</b>  {{$locacao->Veiculo->cor}}
    </td>
    <td>
        <b class="tx">Placa:</b>  {{$locacao->Veiculo->placa}}
    </td>
</tr>
</table>
<div class="retangulo">
<span class="texto">LOCAÇÃO</span>
</div>
<table class="tabelas" id='ficha'>
<tr>
    <td>
        <b class="tx">Data da Saída:</b> {{\Carbon\Carbon::parse($locacao->data_saida)->format('d/m/Y')}}
    </td>
    <td>
        <b class="tx">Hora da Saída:</b> {{$locacao->hora_saida}}
    </td>

    <td>
        <b class="tx">Data do Retorno:</b> {{\Carbon\Carbon::parse($locacao->data_retorno)->format('d/m/Y')}}
    </td>
    <td>
        <b class="tx">Hora do Retorno:</b> {{$locacao->hora_retorno}}
    </td>
</tr>
    <td>
        <b class="tx">Km de Saída:</b>  {{$locacao->km_saida}}
    </td>
    <td>
        <b class="tx">Qtd de Diárias:</b> {{$locacao->qtd_diarias}}
    </td>
    <td colspan="2">
        <b class="tx">Valor da Diária R$:</b> {{$locacao->Veiculo->valor_diaria}}
    </td>

</tr>
<tr>
    <td >
        <b class="tx">Km de Retorno:</b> {{$locacao->km_retorno}}
    </td>
    <td >
        <b class="tx">Valor do Desconto R$:</b> {{$locacao->valor_desconto}}
    </td>
    <td colspan="2">
        <b class="tx">Valor Total R$:</b> {{$locacao->valor_total_desconto}}
    </td>

</tr>

</table>

<table class="tabelas" id='ficha'>
<tr>
    <td>
        <b class="tx">Observações: </b> {{$locacao->obs}}
    </td>
</tr>
</table>

<div class="container">
    <div class="tela">
        <table>
            <tr>
                <td>
                    <h3>Inspeção de Veículo</h3>
                    <tr>
                        <td>( ) Buzina.</td>
                    </tr>
                    <tr>
                        <td>( ) Farol</td>
                    </tr>
                    <tr>
                        <td>( ) Bateria</td>
                    </tr>
                    <tr>
                        <td>( ) Pisca Esquerdo</td>
                    </tr>
                    <tr>
                        <td>( ) Pisca Direito</td>
                    </tr>
                    <tr>
                        <td>( ) Pedaleiras</td>
                    </tr>
                    <tr>
                        <td>( ) Carenagem Esquerda</td>
                    </tr>
                    <tr>
                        <td>( ) Carenagem Direita</td>
                    </tr>
                    <tr>
                        <td>( ) Pneus</td>
                    </tr>
                </td>
            </tr>
        </table>

    </div>
</div>
<div style="margin-left: 300px">
    <table style="width: 100%">
        <tr>
            <td><p style="margin-left: 90px">Osasco - SP, {{ $dataAtual->isoFormat('DD MMMM YYYY') }}</p></td>
        </tr>
        <br>
        <tr>
            <td>
                <tr>
                    <td><center>_________________________________________</center><br>
                                <center>LOCADOR: KLVIDAL LOCAÇÃO DE VEÍCULOS.</center>
                    <p style = "font-size:10px; text-align: center">Proprietário ou representante legal da Empresa</p>
                    </td>
                </tr>

            </td>
        </tr>
        <br><br>
        <tr>
            <td>
                <tr>
                    <td>
                        <div>
                           <center> _________________________________________</center><br>
                                    <center>LOCATÁRIO: {{$locacao->Cliente->nome}}</center>
                                    
                        </div>
                    </td>
                </tr>

            </td>
        </tr>
       </table>

</div>


<!-- PÁGINA 2 -->

<style>
    .break {
        page-break-before: always;
         }
    .parag {
        text-align: justify;
        font-size: 11;
    }
</style>

<div class="break">

<table style="width: 100%">
    <tr>
        <td><img src="{{ asset('img/logo.png') }}" alt="Image" height="60" width="180"></td>
      <td> <p style="width: 100%; font-size:20px; font-weight: bold" align="center">Contrato de Locação de Veículos</p>

      </td>
  </tr>
  </table>
</div>
<div>
    <p class="parag">
        Registro: <b>{{$locacao->id}}</b><br><br>   
        
        
    <style>
        body {
            font-family: Arial, sans-serif;
            line-height: 1.6;
            margin: 10px;
        }
        .container {
            width: 100%;
            margin: auto;
            border: 0px solid #ccc;
            padding: 20px;
        }
        .header, .footer {
            text-align: center;
            margin-bottom: 20px;
        }
        .section-title {
            font-weight: bold;
            margin-top: 20px;
            margin-bottom: 10px;
        }
        .clause {
            margin-bottom: 10px;
        }
        .sub-clause {
            margin-left: 20px;
            margin-bottom: 5px;
        }
        .indent {
            margin-left: 40px;
        }
        .signature-block {
            margin-top: 50px;
            text-align: center;
        }
        .signature-line {
            border-top: 1px solid #000;
            display: inline-block;
            width: 300px;
            margin-top: 50px;
        }
        .page-break {
            page-break-after: always;
        }
    </style>

<body>
    <div class="container">
        <div class="header">
            <h2>CONTRATO DE LOCAÇÃO</h2>
        </div>

        <p>Klvidal Locação de Veículos, CNPJ: 41.110.090/0001-50 situado na Avenida Presidente Costa e Silva, 1460 Helena Maria Osasco, e-mail: klvidalocacaodeveiculos@gmail.com ora denominado LOCADOR e , Cristiano Borges da Silva Moura com documento de identidade nº 26.752.614 inscrito no CPF: 255.592.938-06 Residente: Rua: Rosalina Villela, Ferraz, 14ª cs 1 Munhoz Junior Osasco- SP e-mail: cristianobsmoura@gmail.com denominado LOCATÁRIO , vêm, através do presente instrumento,celebrar CONTRATO DE LOCAÇÃO DE VEÍCULO AUTOMOTOR, que será regido pelas cláusulas e condições abaixo dis- postas</p>

        <p>O contrato é o seguinte veículo automotor:</p>

        <div class="section-title">CLÁUSULA 1ª  – DO OBJETO DO CONTRATO</div>
        <div class="clause">
            <p>Veículo Renault/ Logan Cor: Preto Ano modelo 2016</p>
            <p>Placa: PKI-2C18</p>
            <p>Renavam nº 01110476636.</p>
            <p>O automóvel, objeto deste contrato, será utilizado apenas na cidade de São Paulo, não sendo permitido rodar no interior, litoral e em outro estado. </p>
            <p>Seu uso é exclusivo do LOCATÁRIO não sendo permitido sub-rogar os direitos por ele obtidos através do presente contrato a terceiros, tampouco permitir que outra pessoa conduza o referido veículo sem a inequívoca e expressa autorização do LOCADOR , sob pena de rescisão contratual, multa de R$ 1.000,00 (um mil reais) bem como responsabilização total por qualquer dano em relação ao veículo, inclu- sive os provenientes de caso fortuito ou força maior. </p>
            <p>Parágrafo único: Ocorrendo a utilização do veículo por terceiros com a concordância do LOCATÁRIO , este se responsabilizará por qualquer ação civil ou criminal que referida utilização possa gerar, isentando assim o LOCADOR de qualquer responsabilidade, ou ônus. </p>
        </div>

        <div class="section-title">CLÁUSULA 2ª – DAS OBRIGAÇÕES DO LOCADOR E LOCATÁRIO. </div>
        <div class="clause">
            <p>O LOCADOR obriga-se a manter Seguro contratado para o veículo objeto do presente contrato. </p>
            <p>É de responsabilidade do LOCADOR o pagamento do IPVA, Imposto sobre Veículo Automotor, bem como o pa- gamento do Seguro contratado para o veículo objeto do presente contrato. </p>
            <p>É de responsabilidade do LOCATÁRIO o pagamento de quaisquer multas inerentes à utilização do veículo sofridas na vigência deste contrato, salvo na ocasião em que o automóvel se encontrar na posse do LOCADOR . </p>
            <p>O veículo objeto do presente contrato permanecerá na posse do LOCATÁRIO por período integral, de segunda à domingo. </p>
            <p>LOCATÁRIO se compromete a utilizar o veículo de acordo com a legislação vigente, zelando pela conservação e pelo bom estado do veículo. </p>
            <p>2.6 Fica acordado entre as partes que o veículo objeto deste contrato será submetido às seguintes vistorias, com o objetivo de garantir a boa conservação e o adequado uso do bem locado: </p>
            <div class="sub-clause">
                <p>2.6.1 Vistoria Antes da Retirada: No momento da retirada, o veículo será submetido a vistoria conjunta entre o LOCADOR (ou mecânico por ele designado) e o LOCATÁRIO , com o objetivo de registrar suas condições gerais. </p>
                <p>A vistoria abrangerá, mas não se limitará a: lataria, itens externos, pneus, funcionamento dos sistemas essenciais, limpeza, conservação e acessórios internos. </p>
                <p>O LOCATÁRIO deverá informar imediatamente qualquer avaria, dano ou irregularidade identificada durante a inspeção, para que conste no Termo de Vistoria, o qual será devidamente assinado pelas partes e integrado a este contrato, não podendo ser objeto de contestação futura. </p>
                <p>Toda a vistoria será documentada por fotos tiradas no momento da inspeção, as quais serão enviadas ao e-mail do LOCATÁRIO para fins de comprovação e arquivo. </p>
            </div>
            <p>Vistoria Mensal: Durante o período de locação, o veículo será vistoriado mensalmente para verificar seu estado de conservação e possíveis danos. </p>
            <p>O LOCATÁRIO se compromete a permitir as vistorias e levar o veículo limpo para facilitar a avaliação diretamente à oficina credenciada indicada pelo LOCADOR. </p>
            <p>Caso sejam identificados danos pequenos, sem a necessidade de emissão do boletim de ocorrência, o LOCATÁRIO será responsável por repará-los no prazo limite de até 15 dias. </p>
            <p>Caso não seja possível a imediata regularização do veículo devido este está em uso, o LOCATÁRIO deverá efetuar um deposito adicional semanal para cobrir as despesas orçadas pelo LOCADOR. </p>
            <p>Vistoria na Devolução: O veículo será novamente vistoriado no momento da devolução, com o propósito de comparar as condições do veículo entregue, com o relatório da vistoria inicial. </p>
            <p>O LOCATÁRIO se compromete a devolver o veículo nas mesmas condições em que o recebeu. </p>
            <p>Para que a avaliação na devo- lução seja realizada de maneira precisa, o veículo deverá ser entregue limpo. </p>
            <p>Caso sejam constatados danos ou avarias, o LOCATÁRIO será responsabilizado pelos custos de reparação ou reposição do veículo, conforme os resultados do relatório de vistoria final. </p>
            <p>Parágrafo único: O LOCATÁRIO declara estar plenamente ciente de todas as vistorias descritas e assume total responsabilidade pela conservação do veículo durante todo o período de locação, conforme TERMO de vistoria assinados pelas partes. </p>
            <p>Caso o LOCATÁRIO não compareça a vistoria informada pelo LOCADOR, conforme agendamento prévio, estará sujeito ao encerramento do contrato. </p>
        </div>

        <div class="section-title">CLÁUSULA 3ª – MANUTENÇÃO. </div>
        <div class="clause">
            <p>O veículo objeto do presente contrato será submetido à manutenção preventiva periódica realizada EXCLUSIVAMENTE pela oficina credenciada Didi Mecânica do senhor Waldir Mendes, localizada na Avenida Presidente Costa e Silva, 1460 Helena Maria-Osasco. </p>
            <p>Caso haja necessidade de outro tipo de Manutenção ou reparo, deverá ser autorizado expressamente pelo senhor Waldir Mendes. </p>
            <p>3.1.1 O veículo do presente contrato será submetido à MANUTENÇÃO PREVENTIVA de responsabilidade do LOCADOR os itens a seguir : </p>
            <div class="indent">
                <p>Troca de Pneus -> quando estiverem no nível ou abaixo do TWI - (Em caso de avarias, deverá ser paga pelo LOCATÁRIO )</p>
                <p>Vela e cabo de vela -> a cada 5 meses</p>
                <p>Bobina -> quando apresentar falhas</p>
                <p>Correia dentada/correia de comando -> a cada 30.000 KM</p>
                <p>Pastilhas > entre 15.000,00 e 20.000 KM</p>
                <p>Alinhamento e balanceamento</p>
            </div>
            <p>3.1.2 O LOCATÁRIO declara estar ciente de que é exclusivamente responsável pela realização das manutenções preventivas do veículo, em especial a TROCA  DE ÓLEO E FILTRO DO MOTOR a cada 10.000 km . </p>
            <p>Caso não cumpra essa obrigação, será responsável por todos os danos e custos decorrentes da falta desta manutenção. </p>
            <p>Caso alguma das manutenções supracitadas cláusula 3.1.1 seja necessária antes do período estipulado, desde que não seja por mau uso, serão arcadas pelo LOCADOR. </p>
            <p>3.2.1 Caso seja necessário completar o óleo antes do período indicado, o LOCATÁRIO está ciente que deverá ser executado exclusivamente pela oficina Didi Mecânica, pelo responsável Waldir Pinto Mendes ou em outro estabelecimento previamente autorizado pelo LOCADOR. </p>
            <p>Qualquer reposição realizada fora dessas condições não será reembolsado pelo LOCADOR. </p>
            <p>Fica acordado entre as partes que a troca e a manutenção de itens do veículo que apresentem desgaste ou danos ocasionados pelo uso regular, incluindo, mas não se limitando a lâmpadas, palhetas de limpadores de parabrisa, borrachas, estofados (rasgos, deformidades, danos e sujeira), itens e acessórios internos e externos , não estão cobertos pela manutenção preventiva fornecida pelo LOCADOR. </p>
            <p>Tais itens serão de responsabilidade exclusiva do LOCATÁRIO , que deverá mantê-los em perfeito estado de funcionamento durante o período de locação até a sua devolução, em conformidade com seu estado inicial entregue e termo assinado cláusula 2.6.1 </p>
            <p>3.3.1 A manutenção do veículo, referente a troca das peças oriundas de má utilização do veículo, é de responsabilidade do LOCATÁRIO. </p>
            <p>Caso seja necessário completar o óleo antes do período indicado, o LOCATÁRIO está ciente que deverá ser executado exclusivamente pela oficina Didi Mecânica, pelo responsável Waldir Pinto Mendes ou em outro estabelecimento previamente autorizado pelo LOCADOR. </p>
            <p>Qualquer reposição realizada fora dessas condições não será reembolsado pelo LOCADOR. </p>
            <p>Os gastos das manutenções extras em decorrência de uso do combustível adulterado independente do dolo, bem como o valor pago pela mão de obra do profissional que realizará o serviço serão arcados pelo LOCATÁRIO . </p>
            <p>O LOCATÁRIO reconhece e assume a responsabilidade de monitorar os níveis de água e óleo do motor do veículo, garantindo sua reposição sempre que necessário. </p>
            <p>Caso ocorra qualquer dano ao motor ou a outros componentes em decorrência da falta desses fluidos, todos os custos de reparo serão de sua exclusiva responsabilidade. </p>
            <p>Ademais, o LOCATÁRIO deverá encaminhar ao LOCADOR fotos atuais dos níveis de água e óleo todo domingo via WhasAPP. </p>
            <p>Esta obrigação tem fundamento nos princípios da boa-fé objetiva e da função social do contrato (arts. 421 e 422 do Código Civil), visando à preservação do veículo. </p>
            <p>O LOCATÁRIO assume a responsabilidade de monitorar o funcionamento do veículo no dia a dia, observando o painel, faróis e demais itens de segurança, bem como, qualquer indicador de anomalias no desempenho do veículo. </p>
            <p>Caso identifique qualquer problema e, ainda assim, decida continuar dirigindo o veículo, assume integralmente os riscos e responsabilidades decorrentes de eventuais danos ou acidentes. </p>
            <p>Em qualquer situação de anomalia, o LOCATÁRIO deverá encostar o veículo de forma segura e informar imediatamente o LOCADOR para que sejam tomadas as devidas providências. </p>
            <p>Parágrafo único: O LOCADOR deverá realizará as manutenções no período máximo de 6 (seis) horas, sem prejuízo na diária do veículo . </p>
            <p>Não sendo possível, realizar a manutenção no período de 6 (seis) horas, o LOCADOR dará opção de não ser cobrado a diária do veículo (pelo período em que permanecer em manutenção), ou pelo DISTRATO DO CONTRATO DE LOCAÇÃO com a devolução da caução, após a vistoria de check list. </p>
            <p>3.7.1 O LOCADOR compromete-se a fornecer ao LOCATÁRIO suporte em caso de problemas mecânicos ou falhas no veículo que não sejam decorrentes de uso inadequado ou negligência por parte do LOCATÁRIO , durante o período de locação. </p>
            <p>O LOCADOR deverá assegurar que o veículo esteja com a documentação regularizada, incluindo, mas não se limitando a, licenciamento, seguro obrigatório e inspeções periódicas, sempre dentro da validade, sendo responsabilidade do LOCADOR a renovação e a atualização dos mesmos, conforme a legislação vigente. </p>
            <p>.3 LOCADOR não tem a obrigação de fornecer veículo reserva e não se responsabiliza caso o LOCATÁRIO não possa utilizar o veículo por qualquer motivo relacionado à sua indisponibilidade. </p>
            <p>3.9 No caso de quebra, defeito ou desgaste percebidos em ocasião diversa da manutenção periódica, deverá o LOCATÁRIO , informar o LOCADOR imediatamente, no prazo de 24 horas, bem como apresentar o veículo a este para reparos a ser realizados por profissional mecânico designado pelo LOCADOR. </p>
        </div>

        <div class="section-title">CLÁUSULA 4ª – DAS MULTAS E INFRAÇÕES. </div>
        <div class="clause">
            <p>O pagamento das multas pelo LOCATÁRIO tem que ser feito imediatamente após a constatação no sistema do DETRAN, independentemente de qualquer procedimento, seja transferência de pontos ou recurso. </p>
            <p>O LOCATÁRIO concorda que o LOCADOR irá indicá-lo como condutor/infrator responsável pelas infrações de trânsito apuradas durante a locação, nos termos do artigo 257, parágrafos 1º, 3º, 7º e 8º do Código de Trânsito. </p>
            <p>A partir da indicação, o Cliente terá legitimidade para se defender perante o órgão autuador. </p>
            <p>Qualquer questionamento sobre eventual improcedência de multas de trânsito deverá ser feito pelo LOCATÁRIO exclusivamente perante o órgão autuador. </p>
            <p>Se o LOCATÁRIO optar por recorrer da autuação e, sendo o recurso vitorioso, o LOCADOR lhe fornecerá cópia da guia de pagamento para que ele solicite ao órgão o reembolso. </p>
            <p>Na ocorrência da imposição de multas acima mencionadas, deverá o LOCATÁRIO , assim que a autuação da infração chegar na residência do LOCADOR , comparecer em data e local estipulado pelo LOCADOR para a assinatura do auto de infração para fins de transferência dos pontos para a sua CNH, sob pena de pagar ao LOCADOR a quantia de R$ 400,00 reais, em caso de perda de prazo para a transferência dos pontos de real infrator. </p>
            <p>Na ocorrência da imposição de multas acima mencionadas, deverá o LOCATÁRIO , assim que a autuação da infração chegar na residência do LOCADOR , comparecer em data e local estipulado pelo LOCADOR para a assinatura do auto de infração para fins de transferência dos pontos para a sua CNH, sob pena de pagar ao LOCADOR a quantia de R$ 400,00 reais, em caso de perda de prazo para a transferência dos pontos de real infrator. </p>
            <p>Na retirada do carro é obrigatório o aceite na carteira digital de trânsito indicando o motorista deste contrato como principal condutor do veículo. </p>
        </div>

        <div class="section-title">CLÁUSULA 5ª – DA UTILIZAÇÃO. </div>
        <div class="clause">
            <p>O veículo deverá ser utilizado pelo LOCATÁRIO exclusivamente para fins profissionais. </p>
            <p>Deverá também o LOCATÁRIO utilizar o veículo alugado sempre de acordo com os regulamentos estabelecidos pelo Conselho Nacional de Trânsito (COTRAN) e pelo Departamento Estadual de Trânsito (DETRAN). </p>
            <p>do veículo de forma diferente do descrito acima poderá o LOCADOR dar por rescindido o presente contrato por culpa do LOCATÁRIO independente de qualquer notificação, e sem maiores formalidades poderá também proceder com o recolhimento do veículo sem que seja ensejada qualquer pretensão para ação indenizatória, reparatória ou compensatória pelo LOCATÁRIO . </p>
            <p>Qualquer modificação no veículo só poderá ser feita com a autorização expressa do LOCADOR . </p>
            <p>O LOCATÁRIO declara estar ciente que quaisquer danos causados, materiais ou pessoais, decorrente da utiliza- ção ou má utilização do veículo ora locado, será de sua responsabilidade. </p>
            <p>Parágrafo Único: Os contratos que se destinarem à uso profissional, na CNH do locatário deverá conter a informação (EAR) ao qual consta no campo de observações da Carteira Nacional de Habilitação, conforme estabelece a Lei e a resolução n. </p>
            <p>598/16, do CONTRAN. </p>
            <p>5.5 Caso o veículo seja rebocado por estacionamento irregular, o LOCATÁRIO deverá arcar com todos os custos necessários para a recuperação do carro junto ao respectivo depósito público. </p>
            <p>O LOCATÁRIO deverá arcar também com multa contratual de R$ 70,00 reais por dia em que o carro estiver no depósito, a título de lucro cessante. </p>
            <p>5.6 Caso o LOCATÁRIO estacione em local diferente do informado ao LOCADOR conforme declaração assinada, o LOCATÁRIO deverá arcar com qualquer dano ou prejuízo pecuniário ao veículo, inclusive inerentes a caso fortuito ou força maior. </p>
            <p>Fica vedado ao LOCATÁRIO o acionamento do seguro do veículo objeto deste contrato sem a expressa permissão do LOCADOR , sob pena de multa de R$ 200,00, além da obrigação de arcar com eventuais reboques necessários, caso o seguro não mais disponibilize devido ao limite de utilizações mensais deste serviço. </p>
            <p>LOCATÁRIO se responsabiliza por quaisquer acessórios do veículo que estiverem em sua posse, como por exem- plo chave do carro, documento do carro, tapetes, triângulo, macaco, step, rádio do carro, catalizador etc. Caso algum acessório do carro seja perdido ou danificado, o LOCATÁRIO deverá arcar com todos os custos necessários à repo- sição. </p>
            <p>Fica vedado ao LOCATÁRIO sair do Estado de São Paulo com o veículo objeto deste contrato sem a autorização expressa e por escrito do LOCADOR , sob pena de multa de R$ 300,00, além de responsabilização por quaisquer ocorridos com o carro, inclusive caso fortuito e força maior. </p>
            <p>Caso o LOCATÁRIO estacione em local diferente do informado ao LOCADOR conforme declaração assinada, o LOCATÁRIO deverá arcar com qualquer dano ou prejuízo pecuniário ao veículo, inclusive inerentes a caso fortuito ou força maior. </p>
            <p>Fica vedado ao LOCATÁRIO o acionamento do seguro do veículo objeto deste contrato sem a expressa permissão do LOCADOR , sob pena de multa de R$ 200,00, além da obrigação de arcar com eventuais reboques necessários, caso o seguro não mais disponibilize devido ao limite de utilizações mensais deste serviço. </p>
            <p>LOCATÁRIO se responsabiliza por quaisquer acessórios do veículo que estiverem em sua posse, como por exem- plo chave do carro, documento do carro, tapetes, triângulo, macaco, step, rádio do carro, catalizador etc. Caso algum acessório do carro seja perdido ou danificado, o LOCATÁRIO deverá arcar com todos os custos necessários à repo- sição. </p>
            <p>Fica vedado ao LOCATÁRIO sair do Estado de São Paulo com o veículo objeto deste contrato sem a autorização expressa e por escrito do LOCADOR , sob pena de multa de R$ 300,00, além de responsabilização por quaisquer ocorridos com o carro, inclusive caso fortuito e força maior. </p>
            <p>É vedado ao LOCATÁRIO efetuar qualquer reparo ou serviço no carro sem a expressa e prévia anuência do LOCADOR , sob pena de não ser reembolsado por tais serviços e ainda arcar com eventuais danos ao veículo. </p>
            <p>Por segurança O LOCATÁRIO se compromete a guardar o veículo em garagem e estacionamento, quando não estiver dentro do veículo. </p>
        </div>

        <div class="section-title">CLÁUSULA 6ª – DAS OBRIGAÇÕES DO LOCATÁRIO EM DECORRENCIA DE EVENTOS DE QUALQUER NATUREZA </div>
        <div class="clause">
            <p>6.1 O LOCATÁRIO tem a responsabilidade de garantir a preservação do veículo objeto do presente contrato ou a veículo de outrem na ocorrência de acidente de qualquer Natureza, sofridas na vigência do presente contrato quando não contempladas pela cobertura do seguro independente de dolo, culpa, negligência, imprudência ou imperícia do LOCATÁRIO . </p>
            <p>E ocorrendo um EVENTO se compromete a: </p>
            <div class="sub-clause">
                <p>6.1.1Informar imediatamente ao LOCADOR sobre o ocorrido, fornecendo todos os dados necessários sobre o acidente, incluindo informações sobre as partes envolvidas, testemunhas e circunstâncias do fato com fotos e documentos. </p>
                <p>6.1.2 Registrar um Boletim de Ocorrência, quando aplicável, e enviar uma cópia à LOCADORA no prazo má- ximo de 24 (vinte e quatro) horas após o ocorrido. </p>
                <p>Acionar autoridade policial imediatamente após o ocorrido, caso necessário. </p>
                <p>6.1.4 Cooperar integralmente com a LOCADORA e/ou seguradora da LOCADORA na apuração dos danos e no processo de reparação. </p>
                <p>6.1.5 Não realizar reparos no veículo sem a autorização prévia e por escrito da LOCADORA, sob pena de res- ponsabilidade por danos adicionais. </p>
                <p>6.1.6 Efetuar o pagamento de taxas e diárias para a liberação do veículo decorrentes de reboque realizado pelo Poder Público, nos casos necessários. </p>
            </div>
            <p>O LOCATÁRIO poderá optar em acionar o seguro ou efetuar o conserto de forma particular, porém deverá informar o LOCADOR da sua decisão no prazo limite de até 48hs após o Evento, arcando com todos os custos independente da forma escolhida, realizando o conserto em até 15 dias a contar da data da colisão. </p>
            <p>Se o conserto não for realizado dentro do prazo ou não atender aos padrões de qualidade exigidos, o LOCADOR poderá rescindir o contrato e cobrar a multa contratual. </p>
            <p>O LOCATÁRIO reconhece que, ao optar pela utilização do seguro, deverá cumprir integralmente todas as condições estabelecidas pela seguradora para garantir a cobertura, bem como efetuar o pagamento da franquia, conforme previsto na Cláusula 9.4 deste contrato. </p>
            <p>O LOCATÁRIO está ciente que o pagamento semanal não será abonado em caso de qualquer evento sofrido ao veículo, independente de dolo, culpa, negligência, imprudência ou imperícia do LOCATÁRIO . </p>
            <p>Em caso de roubo do veículo locado, e caso o veículo NÃO SEJA LOCALIZADO no prazo máximo de 45 (quarenta e cinco) dias, conforme estipulado pela seguradora contratada pelo LOCADOR, o LOCATÁRIO reconhece e concorda que será responsável pelo pagamento de R$ 1.000,00 (mil reais), referente às despesas incorridas ao LOCADOR com o evento, incluindo, mas não se limitando, ao custo do rastreador e documentação do veículo. </p>
            <p>Fica acordado entre as partes que em casos de roubo, em que o veículo SEJA LOCALIZADO com avarias ou ausência de peças e equipamentos pertencentes ao mesmo, é de responsabilidade do LOCATÁRIO efetuar o pa- gamento de todas as despesas oriundas do evento quando estes não forem contempladas pela cobertura do se- guro, independente de dolo, culpa, negligência, imprudência ou imperícia do LOCATÁRIO. </p>
            <p>A responsabilidade determinada nos itens supracitados permanece estabelecida, inclusive, caso o LOCATÁRIO não se encontre no interior do veículo objeto do presente contrato. </p>
            <p>O LOCATÁRIO está ciente que o pagamento semanal não será abonado em caso de qualquer evento sofrido ao veículo, independente de dolo, culpa, negligência, imprudência ou imperícia do LOCATÁRIO . </p>
            <p>Em caso de roubo do veículo locado, e caso o veículo NÃO SEJA LOCALIZADO no prazo máximo de 45 (quarenta e cinco) dias, conforme estipulado pela seguradora contratada pelo LOCADOR, o LOCATÁRIO reconhece e con- corda que será responsável pelo pagamento de R$ 1.000,00 (mil reais), referente às despesas incorridas ao LOCA- DOR com o evento, incluindo, mas não se limitando, ao custo do rastreador e documentação do veículo. </p>
            <p>Fica acordado entre as partes que em casos de roubo, em que o veículo SEJA LOCALIZADO com avarias ou ausência de peças e equipamentos pertencentes ao mesmo, é de responsabilidade do LOCATÁRIO efetuar o pa- gamento de todas as despesas oriundas do evento quando estes não forem contempladas pela cobertura do se- guro, independente de dolo, culpa, negligência, imprudência ou imperícia do LOCATÁRIO. </p>
            <p>A responsabilidade determinada nos itens supracitados permanece estabelecida, inclusive, caso o LOCATÁRIO não se encontre no interior do veículo objeto do presente contrato. </p>
        </div>

        <div class="section-title">CLAUSULA 7ª – DO SEGURO E RESPONSABILIDADES DO LOCATÁRIO </div>
        <div class="clause">
            <p>7.1 O LOCADOR disponibiliza ao LOCATÁRIO um seguro para o veículo locado, com o objetivo de proteger o bem durante o período de locação. </p>
            <p>O seguro contratado abrange uma série de eventos específicos, conforme acordado entre o LOCADOR e a seguradora, e exclui determinados eventos conforme riscos e situações. </p>
            <p>Ao firmar o presente contrato, o LOCATÁRIO declara estar plenamente ciente de que será integralmente responsável por quais- quer danos, prejuízos ou despesas que não estejam cobertos pelo seguro, incluindo, mas não se limitando a, danos ao veículo locado, danos a terceiros, ou quaisquer outros eventos fora das condições de cobertura estabe- lecidas pela apólice de seguro. </p>
            <p>Conforme clausula 7.1, fica o LOCATÁRIO ciente dos eventos que POSSUI cobertura: </p>
            <div class="indent">
                <p>Proteção para colisão; </p>
                <p>Proteção para roubo e furto qualificado; </p>
                <p>Proteção para perda total; </p>
                <p>Fenômenos da natureza (exceto chuva de granizo e água do mar); </p>
                <p>Ressarcimentos aos prejuízos causados à terceiro de até R$ 50.000,00; </p>
                <p>Reboques até 200km </p>
            </div>
            <p>7.3 Conforme cláusula 7.1, fica o LOCATÁRIO ciente dos principais eventos que NÃO possui cobertura: </p>
            <div class="indent">
                <p>Danos por chuva de Granizo; </p>
                <p>Danos por água do mar; </p>
                <p>Danos por alagamentos em que o condutor assumiu o risco ao ultrapassar; </p>
                <p>Eventos em que o condutor estava sob o efeito de álcool, drogas ou substâncias ilícitas; </p>
                <p>Danos por participação em competições, ralis ou outras atividades não autorizadas pela lei; </p>
                <p>Danos causados por motorista não autorizado ou não identificado no contrato de locação; </p>
                <p>Danos internos e externos que não originaram de colisão </p>
            </div>
            <p>Parágrafo único: Os eventos não cobertos listadas acima na cláusula 7.3 são apenas algumas das exclusões previstas na apólice de seguro. </p>
            <p>Existem outras situações adicionais, conforme as condições gerais da seguradora, que podem ser aplicáveis ao caso específico. </p>
            <p>O LOCATÁRIO pode solicitar uma cópia das condições gerais da apólice de seguro à locadora para obter informações completas sobre as exclusões e limitações da cobertura. </p>
            <p>7.4 O LOCATÁRIO reconhece e concorda que, o seguro contratado pelo LOCADOR possui franquia e em caso de sinistro, a franquia do seguro será fixada em 6% (seis por cento) do valor de mercado do veículo, conforme esta- belecido na tabela Fipe vigente à data do ocorrido. </p>
            <p>O LOCATÁRIO será integralmente responsável pelo pagamento do valor da franquia, que deverá ser pago ao LOCADOR no momento da ocorrência do sinistro ou conforme as condições a serem acordadas entre as partes. </p>
            <p>O LOCADOR, com base na liberdade contratual prevista pelo art. </p>
            <p>421 do Código Civil Brasileiro , se reserva o direito de alterar a empresa de seguros responsável pela apólice do veículo locado a qualquer tempo, sem neces- sidade de prévio aviso ou consentimento do LOCATÁRIO . </p>
            <p>7.6 O LOCATÁRIO reconhece que a alteração da seguradora não implica em qualquer ônus adicional, penalidade ou modificação das suas responsabilidades contratuais, uma vez que as obrigações do LOCATÁRIO permanecem as mesmas, independentemente da companhia de seguros escolhida pelo LOCADOR. </p>
            <p>Caso o LOCATÁRIO se envolva em sinistro estando sob ação de álcool/ entorpecentes ou se o condutor não fizer o teste de embriaguez requerido pela autoridade, este deverá arcar com o valor da tabela FIPE do carro, caso a indenização do seguro seja negada ou com todos os custos inerentes à recuperação do veículo junto ao depósito, em caso de reboque. </p>
        </div>

        <div class="section-title">CLÁUSULA 8ª – DO PAGAMENTO EM RAZÃO DA LOCAÇÃO DO VEÍCULO </div>
        <div class="clause">
            <p>O LOCATÁRIO pagará ao LOCADOR o valor de R$ 600,00 ( Seiscentos reais) realizados toda segunda-feira de cada semana, via chave Pix CNPJ: 41.110.090/0001-50 Banco Itaú Empresas em nome de Klvidal Locação de Veículos LTDA </p>
            <p>8.2 Caso o pagamento não seja efetuado e disponível em conta no vencimento, passará a ser cobrado o adicional de R$ 30,00 (Trinta reais) por dia a título de juros, ou solicitar a devolução do veículo por quebra de contrato. </p>
            <p>8.3 Fica o LOCATÁRIO obrigado a encaminhar o comprovante de pagamento ao LOCADOR , até às 00:00 do dia do vencimento acordado de cada semana, sob pena de incidência da multa por atraso prevista na cláusula 7.2, indepen- dente de notícia de pagamento </p>
            <p>Parágrafo único – O veículo poderá ser bloqueado pelo LOCADOR a qualquer momento, caso algo esteja em desa- cordo com o contrato. </p>
            <p>Fica o LOCATÁRIO ciente que poderá haver correção a cada 6 meses a contar data de retirada do veículo e enquanto vigência do contrato, o valor do aluguel semanal será reajustado 5% do seu valor, para se adequar ao aumento progressivo dos preços dos setores de veículos/peças e manutenções. </p>
            <p>Podendo o LOCATÁRIO aceitar o aumento ou devolver o veículo antes do reajuste. </p>
            <p>O LOCATÁRIO , não vindo a efetuar o pagamento do aluguel por um período de atraso superior à 15 (quinze) dias, mediante notificação extrajudicial , o presente contrato estará reincidido de imediato por culpa do LOCATÁRIO , ficando sujeito inscrição do nome no SPC/Serasa, bem como ter a posse do veículo configurada como Apropriação Indébita, implicando também a possibilidade de adoção de medidas judiciais, inclusive a Busca e Apreensão do veículo e/ou lavratura de Boletim de Ocorrência, cabendo ao LOCATÁRIO ressarcir o LOCADOR das despesas oriundas da retenção indevida do bem, arcando ainda  com as despesas judiciais e/ou extrajudiciais que o LOCADOR venha a ter para efetuar a busca, apreensão e efetiva reintegração da posse do veículo. </p>
        </div>

        <div class="section-title">CLÁUSULA 9 ª – DO REAJUSTE ALUGUEL </div>
        <div class="clause">
            <p>9.1 Fica o LOCATÁRIO ciente, que os valores estabelecidos neste contrato, incluindo o valor da locação semanal, encargos, juros e demais obrigações pecuniárias assumidas pelo LOCATÁRIO , serão reajustados anualmente, a contar da data da assinatura deste instrumento, com base na variação acumulada do Índice Nacional de Preços ao Consumidor Amplo – IPCA, divulgado pelo Instituto Brasileiro de Geografia e Estatística – IBGE, ou, na hipótese de sua extinção, por outro índice oficial que o venha a substituir ou que melhor reflita a inflação do período. </p>
            <p>Sem prejuízo do reajuste anual previsto na Cláusula anterior 9.1, fica convencionado que, em caso de alteração significativa nos custos operacionais do LOCADOR, na política tributária aplicável ao setor, ou por razões supervenientes que afetem substancialmente o equilíbrio econômico-financeiro do contrato, a LOCADORA poderá, mediante comunicação prévia ao LOCATÁRIO com antecedência mínima de 30 (trinta) dias, aplicar revisão extraordinária dos valores praticados, independentemente da periodicidade anual. </p>
            <p>O LOCATÁRIO será informado dos novos valores por meio eletrônico (e-mail e/ou aplicativo de mensagens), utilizando os dados de contato fornecidos no presente contrato, obrigando-se a cumprir os valores atualizados a partir da data indicada na notificação, salvo manifestação expressa em contrário, hipótese em que poderá haver a rescisão contratual, sem ônus adicional às partes, respeitados os direitos adquiridos e eventuais saldos devidos até a data da efetiva devolução do veículo. </p>
            <p>A ausência de reajuste na data base anual não implica renúncia de direito por parte da LOCADORA, podendo o reajuste ser aplicado retroativamente, respeitados os limites legais. </p>
        </div>

        <div class="section-title">CLÁUSULA 10º – DA QUANTIA CAUÇÃO </div>
        <div class="clause">
            <p>Estabelecem as partes, a QUANTIA CAUÇÃO em valor total de R$ 1.000,00 (Mil Reais) </p>
            <p>Ao término da vigência do presente contrato caberá ao LOCADOR restituir a integralidade da QUANTIA CAU- ÇÃO ao LOCATÁRIO no prazo de 30 dias corridos a contar da devolução do veículo por parte do LOCATÁRIO con- forme as seguintes CONDIÇÕES: </p>
            <div class="indent">
                <p>A devolução do automóvel em perfeito estado, em condição equivalente assinadas na vistoria pelo me- cânico do LOCADOR. </p>
                <p>A inexistência de aluguéis, multa de trânsito ou multa por descumprimento contratual pendentes por parte do LOCATÁRIO . </p>
                <p>10;2.3 Veículo limpo (interno e externo, incluindo estofados) </p>
                <p>Após descontados quaisquer outros débitos pendentes. </p>
            </div>
            <p>10.3 Na hipótese de não estarem observadas as condições acima dispostas, poderá o LOCADOR utilizar-se da QUANTIA CAUÇÃO para adimplir eventuais débitos/atrasos ou reparar danos causados ao automóvel por dolo ou não por parte do locatório, a qual só será de direito do LOCATÁRIO a quantia remanescente a tal utilização da QUANTIA CAUÇÃO, se houver. </p>
            <p>Os gastos com o combustível do veículo deverão ser arcados integralmente pelo LOCATÁRIO , devendo sem- pre entregar o veículo com a mesma quantidade de combustível contida no veículo quando da entrega do mesmo pelo LOCADOR, sob pena de desconto na QUANTIA CAUÇÃO do valor necessário a atingir tal quantidade de com- bustível. </p>
            <p>Qualquer valor inerente a cobrança por passagem ou estacionamento do veículo durante a posse do LOCATÁRIO deverá por este ser arcado. </p>
            <p>Caso o LOCADOR seja cobrado por qualquer valor desta natureza, o LOCATÁRIO deverá reembolsá-lo imediatamente. </p>
            <p>10.6 Caso o carro seja devolvido sujo, será cobrada a lavagem simples ou especial, dependendo do seu estado. </p>
            <p>Quando o documento do carro e o documento do GNV não forem devolvidos, será cobrado o reembolso das despesas para obtenção de 2ª via de ambos e, diante da impossibilidade de o carro ser alugado, também será cobrada indenização de 70% sobre o valor de 3 diárias. </p>
            <p>O LOCATÁRIO não se responsabiliza por objetos/valores deixados no carro, os quais, se localizados, poderão, por nossa liberalidade, ser armazenados no interior das agências por até 60 (sessenta) dias e descartados ao final desse período </p>
        </div>

        <div class="section-title">CLÁUSULA 11ª – DA EXCLUSIVIDADE DA LOCAÇÃO E INEXISTÊNCIA DE VÍNCULO TRABALHISTA </div>
        <div class="clause">
            <p>Fica acordado entre as partes que o LOCADOR aluga o veículo exclusivamente ao LOCATÁRIO , que não poderá, sob nenhuma circunstância, ceder, transferir, sublocar ou permitir que terceiros utilizem o veículo. </p>
            <p>A locação é pessoal e intransferível, e qualquer infração a esta condição poderá ensejar a rescisão imediata do contrato, com a aplicação da multa contratual. </p>
            <p>As partes concordam expressamente que não existe entre elas qualquer vínculo trabalhista, sejam entre o LOCADOR e o LOCATÁRIO ou entre o LOCATÁRIO e quaisquer outros terceiros. </p>
            <p>Consequentemente, não haverá incidência de obrigações previdenciárias, encargos sociais ou trabalhistas em razão deste contrato, isentando o LOCADOR de qualquer responsabilidade nesse sentido. </p>
            <p>Não há entre as partes qualquer subordinação, pessoalidade, habitualidade ou controle típicos de uma relação de emprego. </p>
            <p>O LOCATÁRIO assume total responsabilidade por quaisquer contratos de trabalho ou relações de subordinação com terceiros, relacionados direta ou indiretamente à utilização do veículo deste contrato, isentando o LOCADOR de qualquer responsabilidade sobre esses vínculos. </p>
            <p>O LOCATÁRIO compromete-se, ainda, a indenizar o LOCADOR por quaisquer reclamações trabalhistas, previdenciárias ou de encargos sociais, de qualquer natureza, que venham a ser ajuizadas em decorrência de atos ou omissões do LOCATÁRIO ou das pessoas por ele contratadas ou autorizadas a utilizar o veículo. </p>
        </div>

        <div class="section-title">CLÁUSULA 12ª – DA VIGÊNCIA E RESCISÃO </div>
        <div class="clause">
            <p>Fica acordados entre as partes que o presente contrato terá vigência a partir de 22/08/2024 independente do horário da retirada do veículo e irá vigorar por prazo mínimo de 90 dias. </p>
            <p>Após este período, caso haja interesse entre as partes, o mesmo se renovará automaticamente. </p>
            <p>Após cumprido o período mínimo de 90 dias, é assegurado às partes a resilição do presente CONTRATO a qualquer tempo, bastando, para tanto, dar ciência a outra parte acerca da rescisão cabendo ao LOCATÁRIO a devolução do veículo ao LOCADOR em local e data designada. </p>
            <p>O LOCATÁRIO não poderá devolver o veículo antes de 90 dias sob pena de multa contratual de R$ 1.200,00(mil e duzentos reais). </p>
            <p>O LOCADOR, não poderá solicitar o veículo antes do período de 90 dias do contrato sob pena de multa, salvo por alguma irregularidade do LOCATÁRIO </p>
            <p>O Contrato será considerado automaticamente rescindido pelo LOCADOR, independentemente de qualquer notificação, e este, sem mais formalidades, providenciará a retomada do carro, sem que isso enseje ao LOCATÁRIO qualquer direito de retenção, indenização ou devolução da caução, quando: </p>
            <div class="indent">
                <p>O carro não for devolvido na data, hora e local previamente ajustados; </p>
                <p>Ocorrer qualquer acidente ou dano envolvendo o carro alugado, causado dolosa ou culposamente pelo LOCATÁRIO ; </p>
                <p>Ocorrer o Uso Inadequado do carro; </p>
                <p>Ocorrer apreensão do carro alugado por autoridades competente; </p>
                <p>O LOCATÁRIO não quitar seus débitos nos respectivos vencimentos; </p>
            </div>
            <p>Caso o LOCATÁRIO acumule qualquer pendência financeira, independentemente do valor e não a quite no prazo estabelecido pelo LOCADOR, o contrato ficará automaticamente rescindido e o carro deverá ser entregue em local determinado pelo LOCADOR, imediatamente, sob pena de multa de R$ 150,00 (cento e cinquenta reais por dia), salvo acordo contrário entre as partes. </p>
        </div>

        <div class="section-title">CLÁUSULA 13ª – DA VALIDAÇÃO DO CONTRATO E EXIGÊNCIAS DE ASSINATURAS </div>
        <div class="clause">
            <p>Fica acordado entre as partes, que este Contrato, será considerado válido e plenamente eficaz após o cum- primento das seguintes condições: </p>
            <div class="sub-clause">
                <p>13.1.1 Assinatura Digital : LOCATÁRIO deverá assinar digitalmente este contrato por meio da plataforma de assinatura eletrônica indicada pelo LOCADOR através do envio por e-mail. </p>
                <p>O LOCATÁRIO reconhece a forma de contratação por meio eletrônico e digital como válida e plenamente eficaz, de modo que este contrato e os documentos que o compõe constituem título executivo extrajudicial para todos os fins de direito em conformidade com a Medida Provisória nº 2.200-2/2001, que regulamenta a Infraestrutura de Chaves Públicas Brasileira (ICP-Brasil), atribuindo a mesma validade jurídica de uma assinatura manuscrita. </p>
                <p>Assinatura Manual: O LOCATÁRIO deverá assinar manualmente o Termo de Vistoria de Retirada do Veículo , atestando formalmente a retirada do bem junto ao LOCATÁRIO e reconhecendo seu estado de conservação no momento da entrega. </p>
                <p>A aposição da assinatura no referido termo constitui requisito essen- cial para a efetivação do contrato de locação, servindo como comprovação inequívoca da posse do veículo e de suas condições no momento da retirada até a respectiva devolução. </p>
            </div>
            <p>A locação será considerada efetivada e o contrato plenamente válido somente após a assinatura digital do contrato e a assinatura manual do Termo de Vistoria de retirada do veículo. </p>
            <p>Qualquer falha em cumprir uma dessas condições impedirá a efetivação da locação. </p>
        </div>

        <div class="section-title">CLÁUSULA 14ª – DA DEVOLUÇÃO DO VEÍCULO APÓS O TÉRMINO DO CONTRATO </div>
        <div class="clause">
            <p>14.1Após o término do contrato, conforme disposto na cláusula 12, o veículo deve ser devolvido em local indicado pelo LOCADOR, conforme notificação de encerramento do contrato ou por outro prazo estipulado pelo LOCADOR, sob pena de multa de R$ 200,00 (duzentos reais) por dia. </p>
            <p>O LOCÁTARIO se compromete a assinar o TERMO DE DEVOLUÇÃO DO VEÍCULO conforme cláusula 2.6.3 </p>
            <p>Deixa-se claro desde já que a não devolução de veículo pelo LOCATÁRIO após a notificação por escrito do LOCADOR configura-se crime de APROPRIAÇÃO INDÉBITA conforme artigo 168 do Código Penal Brasileiro, com pena de reclusão de um a quatro anos de prisão e multa. </p>
        </div>

        <div class="section-title">CLÁUSULA 15ª - DAS NOTIFICAÇÕES </div>
        <div class="clause">
            <p>Quaisquer notificações e comunicações enviadas sob esse CONTRATO devem ser registradas por e-mail, cor- respondência ou WhatsApp. </p>
            <p>Em havendo alteração do endereço ou contato ficam as partes obrigadas a fornece- rem tal informação. </p>
        </div>

        <p>E, por estarem assim, justas e contratadas, as PARTES firmam o presente instrumento em 02 (duas) vias de igual teor e forma, para que produza seus efeitos legais, e após ter lido e seu conteúdo ter sido claramente en- tendido e aceito. </p>

        <p>Caso o LOCATÁRIO acumule qualquer pendência financeira, independentemente do valor e não a quite no prazo estabelecido pelo LOCADOR, o contrato ficará automaticamente rescindido e o carro deverá ser entregue em local determinado pelo LOCADOR, imediatamente, sob pena de multa de R$ 150,00 (cento e cinquenta reais por dia), salvo acordo contrário entre as partes. </p>

        <div class="footer">
            <p>Osasco, 23 de Maio de 2025</p>
            <div class="signature-block">
                <p>_____________________________________</p>
                <p>Klicie Lins de Souza Vidal Mendes</p>
                <p>(LOCADOR) </p>
                <br>
                <p>_____________________________________</p>
                <p>Cristiano Borges da Silva Moura</p>
                <p>(LOCATÁRIO) </p>
            </div>
            <div class="signature-block">
                <p>_____________________________________</p>
                <p>Waldir Pinto Mendes</p>
                <p>RG: 33.445.140</p>
                <p>(TESTEMUNHA) </p>
                <br>
                <p>_____________________________________</p>
                <p>Tailan Rodrigues de Azevedo</p>
                <p>RG: 49.289.140-0</p>
                <p>(TESTEMUNHA) </p>
            </div>
        </div>
    </div>
</body>
</html>



</div><br><br>

        <div style="text-align: center; font-size: 12">Osasco, {{ $dataAtual->isoFormat('DD MMMM YYYY') }}<br><br><br><br>

            ___________________________________________________________<br>
            LOCATÁRIO: {{$locacao->Cliente->nome}}<br><Br><br><br>

            ___________________________________________________________<br>
            LOCADOR: KLVIDAL LOCAÇÃO DE VEÍCULOS.

        </div>

</body>
</html>
