<?php

namespace Modules\Sica\Filament\SicaAdmin\Resources\Apprentices\Schemas;

use Filament\Forms\Components\Select;
use Filament\Schemas\Components\Grid;
use Filament\Schemas\Components\Section;
use Modules\Sica\Models\Person;
use Filament\Schemas\Schema;
use Modules\Sica\Models\Ficha;

class ApprenticeForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([

                Section::make('Información del aprendiz')

                    ->description('Selecciona los datos principales del aprendiz.')
                    ->icon('heroicon-o-user')
                    ->schema([
                        Grid::make(2)->schema([

                            Select::make('people_id')
                                ->label('Persona')
                                ->options(Person::orderBy('first_name')->pluck('first_name', 'id'))
                                ->searchable()
                                ->preload()
                                ->required()
                                ->helperText('Selecciona la persona asociada a este registro.'),

                            Select::make('ficha_id')
                                ->label('Ficha')
                                ->options(
                                    Ficha::with('program')
                                        ->get()
                                        ->mapWithKeys(function ($ficha) {
                                            return [
                                                $ficha->id => $ficha->number . ' - ' . ($ficha->program->name ?? 'Sin programa')
                                            ];
                                        })
                                )
                                ->searchable()
                                ->preload()
                                ->required()
                                ->helperText('Selecciona la ficha correspondiente.')
                        ]),
                    ]),

                Section::make('Estado del aprendiz')
                    ->description('Define el estado actual del aprendiz.')
                    ->icon('heroicon-o-clipboard-document-check')
                    ->schema([
                        Grid::make(1)->schema([
                            Select::make('state')
                                ->label('Estado')
                                ->options([
                                    'Aprendiz' => 'Aprendiz',
                                    'Pasante'  => 'Pasante',
                                    'Cancelado' => 'Cancelado',
                                ])
                                ->searchable()
                                ->required()
                                ->helperText('Define el estado actual del aprendiz.'),
                        ]),
                    ]),

            ]);
    }
}
