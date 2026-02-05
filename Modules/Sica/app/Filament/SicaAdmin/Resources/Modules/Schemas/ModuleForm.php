<?php

namespace Modules\Sica\Filament\SicaAdmin\Resources\Modules\Schemas;


use Filament\Schemas\Schema;

use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\ViewField;
use Filament\Forms\Components\Toggle; // Importación añadida para limpiar el código
use Filament\Schemas\Components\Grid;
use Filament\Schemas\Components\Section;
use Filament\Forms\Components\Placeholder;


class ModuleForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Section::make('Detalles del Módulo')
                    ->description('Administra la información principal del módulo del sistema.')
                    ->icon('heroicon-o-cpu-chip')
                    ->collapsible()
                    ->schema([
                        Grid::make(2)
                            ->schema([
                                TextInput::make('name')
                                    ->label('Nombre del módulo')
                                    ->placeholder('Ej: Administración / SICA')
                                    ->required()
                                    ->columnSpanFull(),

                                TextInput::make('description')
                                    ->label('Descripción')
                                    ->placeholder('Ingresa una descripción breve...')
                                    ->required()
                                    ->columnSpanFull(),
                            ]),

                        Placeholder::make('ayuda_modulo')
                            ->label('💡 Información')
                            ->content('Los módulos agrupan diferentes aplicaciones. Asegúrate de que el nombre sea descriptivo para facilitar la navegación.'),
                    ]),
            ]);
    }
}
