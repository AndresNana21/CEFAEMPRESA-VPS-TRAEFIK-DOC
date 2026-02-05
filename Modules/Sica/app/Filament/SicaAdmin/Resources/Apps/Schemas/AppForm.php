<?php

namespace Modules\Sica\Filament\SicaAdmin\Resources\Apps\Schemas;

use Filament\Schemas\Schema;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\ViewField;
use Filament\Forms\Components\Toggle; // Importación añadida para limpiar el código
use Filament\Schemas\Components\Grid;
use Filament\Schemas\Components\Section;

class AppForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Section::make('Información básica')
                    ->description('Define el nombre, descripción, estado y URL de la aplicación.')
                    ->icon('heroicon-o-information-circle')
                    ->collapsible()
                    ->schema([
                        Grid::make(2)
                            ->schema([
                                TextInput::make('name')
                                    ->label('Nombre de la aplicación')
                                    ->placeholder('Ej: CEFA Inventarios')
                                    ->required()
                                    ->maxLength(100),

                                TextInput::make('url')
                                    ->label('URL de acceso')
                                    ->placeholder('https://app.cefaempresa.com')
                                    ->required(),

                                // 👇 Nuevo campo para seleccionar el Módulo
                                Select::make('module_id')
                                    ->label('Módulo')
                                    ->relationship('module', 'name') // 'module' es el nombre de la relación en el Modelo App
                                    ->searchable()
                                    ->preload()
                                    ->required()
                                    ->columnSpanFull() // O puedes quitar esto para que ocupe solo media columna
                                    ->helperText('Selecciona el módulo al que pertenece esta aplicación.'),
                            ]),

                        Textarea::make('description')
                            ->label('Descripción')
                            ->placeholder('Describe brevemente la función principal de esta app')
                            ->rows(4)
                            ->columnSpanFull()
                            ->required()
                            ->maxLength(255),

                        Toggle::make('is_active')
                            ->label('Aplicación activa')
                            ->helperText('Activa o desactiva esta aplicación en el panel.')
                            ->onIcon('heroicon-o-check-circle')
                            ->offIcon('heroicon-o-x-circle')
                            ->onColor('success')
                            ->offColor('danger')
                            ->default(true),
                    ]),

                Section::make('Personalización del ícono')
                    ->description('Selecciona el ícono que representará la aplicación en el panel.')
                    ->icon('heroicon-o-swatch')
                    ->collapsible()
                    ->schema([
                        Grid::make(2)
                            ->schema([
                                Select::make('icon')
                                    ->label('Ícono')
                                    ->options([
                                        'heroicon-o-user' => 'Usuario',
                                        'heroicon-o-cog' => 'Configuración',
                                        'heroicon-o-home' => 'Inicio',
                                        'heroicon-o-briefcase' => 'Empresa',
                                        'heroicon-o-clipboard-document' => 'Documentos',
                                    ])
                                    ->placeholder('Selecciona un ícono...')
                                    ->live()
                                    ->searchable()
                                    ->required(),

                                ViewField::make('icon_preview')
                                    ->label('Vista previa')
                                    ->view('forms.components.icon-preview')
                                    ->columnSpan(1),
                            ]),

                        \Filament\Forms\Components\Placeholder::make('nota_icono')
                            ->label('💡 Consejo')
                            ->content('Puedes agregar más íconos editando la lista en este formulario o usando Heroicons disponibles en Filament.'),
                    ]),
            ]);
    }
}
