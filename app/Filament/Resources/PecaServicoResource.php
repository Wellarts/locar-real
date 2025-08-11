<?php

namespace App\Filament\Resources;

use App\Filament\Resources\PecaServicoResource\Pages;
use App\Filament\Resources\PecaServicoResource\RelationManagers;
use App\Models\PecaServico;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class PecaServicoResource extends Resource
{
    protected static ?string $model = PecaServico::class;

    protected static ?string $navigationIcon = 'heroicon-o-cog';

    protected static ?string $navigationLabel = 'Peças e Serviços';

    protected static ?string $navigationGroup = 'Cadastros';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Grid::make()
                    ->columns([
                        'default' => 1,
                        'lg' => 1,
                    ])
                    ->schema([
                        Forms\Components\ToggleButtons::make('tipo')
                            ->options([
                                '0' => 'Peça',
                                '1' => 'Serviço',
                            ])
                            ->colors([
                                '0' => 'danger',
                                '1' => 'info',
                            ])
                            ->inline()
                            ->default(0)
                            ->grouped()
                            ->label(''),

                        Forms\Components\TextInput::make('nome')
                            ->required()
                            ->label('Nome da Peça/Serviço'),
                    ])
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('tipo')
                    ->label('Tipo')
                    ->alignCenter()
                    ->formatStateUsing(fn($state) => match ($state) {
                        '0' => 'Peça',
                        '1' => 'Serviço',
                    })
                    ->badge()
                    ->color(fn($state) => match ($state) {
                        '0' => 'danger',
                        '1' => 'info',
                    })
                    ->icon(fn($state) => match ($state) {
                        '0' => 'heroicon-o-wrench',
                        '1' => 'heroicon-o-wrench-screwdriver',
                    })
                    ->sortable()
                    ->searchable(),
                Tables\Columns\TextColumn::make('nome')
                    ->label('Nome da Peça/Serviço'),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ManagePecaServicos::route('/'),
        ];
    }
}
