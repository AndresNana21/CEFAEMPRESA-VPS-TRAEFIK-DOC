<?php

namespace Modules\Sica\Filament\SicaAdmin\Resources\Programs\Schemas;


use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Components\Grid;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;

class ProgramForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Section::make('Información del programa')
                    ->description('Completa los datos generales y el tipo de formación del programa.')
                    ->icon('heroicon-o-academic-cap')
                    ->schema([
                        Grid::make(2)->schema([
                            TextInput::make('name')
                                ->label('Nombre del programa')
                                ->placeholder('Ejemplo: Mantenimiento de equipos electrónicos')
                                ->maxLength(150)
                                ->required()
                                ->helperText('Introduce el nombre completo del programa de formación.'),

                            Select::make('type_program')
                                ->label('Tipo de programa')
                                ->options([
                                    'technician' => 'Técnico',
                                    'technologist' => 'Tecnólogo',
                                ])
                                ->searchable()
                                ->preload()
                                ->required()
                                ->helperText('Selecciona el nivel de formación correspondiente.'),
                        ]),

                        Textarea::make('description')
                            ->label('Descripción')
                            ->placeholder('Describe brevemente los objetivos o el enfoque del programa...')
                            ->maxLength(255)
                            ->required()
                            ->rows(5)
                            ->helperText('Escribe una descripción corta y clara del programa.')
                    ])
            ]);
    }
}
