<?php

        
namespace App\Filament\Resources\OrdemServicoResource\Pages;

use App\Filament\Resources\OrdemServicoResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateOrdemServico extends CreateRecord
{
    protected static string $resource = OrdemServicoResource::class;

    protected static ?string $title = 'Criar Nova Ordem de Serviço';

    protected function afterCreate(): void
    {
        $record = $this->record;

        // Atualiza o km_atual do veículo escolhido na ordem de serviço
        if ($record->veiculo_id && $record->km_troca) {
            $veiculo = \App\Models\Veiculo::find($record->veiculo_id);
            if ($veiculo) {
                $veiculo->km_atual = $record->km_troca;
                $veiculo->save();
            }
        }
    }

}
