<?php

namespace Modules\Sica\Filament\SicaAdmin\Resources\People\Schemas;

use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;
use Filament\Schemas\Components\Grid;
use Filament\Schemas\Components\Section;
use Filament\Forms\Components\FileUpload;

class PersonForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Section::make('Datos personales')
                    ->description('Completa la información básica de la persona.')
                    ->icon('heroicon-o-user')
                    ->schema([
                        Grid::make(2)->schema([
                            TextInput::make('first_name')
                                ->label('Nombres')
                                ->placeholder('Ejemplo: Andrés Gonzalo')
                                ->maxLength(100)
                                ->required()
                                ->helperText('Introduce los nombres completos.'),

                            TextInput::make('last_name')
                                ->label('Apellidos')
                                ->placeholder('Ejemplo: Barrera Cortés')
                                ->maxLength(100)
                                ->required()
                                ->helperText('Introduce los apellidos completos.'),
                        ]),
                    ]),


                Section::make('Información de contacto')
                    ->description('Proporciona los números de contacto actualizados.')
                    ->icon('heroicon-o-phone')
                    ->schema([
                        Grid::make(2)->schema([
                            TextInput::make('phone_number')
                                ->label('Teléfono principal')
                                ->tel()
                                ->placeholder('Ejemplo: 3001234567')
                                ->required(),

                            TextInput::make('second_phone_number')
                                ->label('Teléfono secundario')
                                ->tel()
                                ->placeholder('Ejemplo: 3109876543')
                                ->required(),
                        ]),
                    ]),

                Section::make('Documento de identidad')
                    ->description('Registra el tipo y número de documento, junto con su imagen en PDF.')
                    ->icon('heroicon-o-identification')
                    ->schema([
                        Grid::make(2)->schema([
                            Select::make('type_document')
                                ->label('Tipo de documento')
                                ->options([
                                    'CC' => 'Cédula de ciudadanía',
                                    'TI' => 'Tarjeta de identidad',
                                ])
                                ->required()
                                ->native(false)
                                ->preload()
                                ->searchable(),

                            TextInput::make('document_number')
                                ->label('Número de documento')
                                ->placeholder('Ejemplo: 1023456789')
                                ->maxLength(20)
                                ->required(),
                        ]),

                        FileUpload::make('doccument_img')
                            ->label('Archivo del documento (PDF)')
                            ->acceptedFileTypes(['application/pdf'])
                            ->directory('documentos')
                            ->maxSize(2048)
                            ->required()
                            ->helperText('Sube el documento en formato PDF (máx. 2 MB).'),
                    ]),


                Section::make('Hoja de vida')
                    ->description('Sube la hoja de vida de la persona en formato PDF.')
                    ->icon('heroicon-o-document-text')
                    ->schema([
                        FileUpload::make('CV')
                            ->label('Archivo de hoja de vida (PDF)')
                            ->acceptedFileTypes(['application/pdf'])
                            ->directory('hojas-de-vida')
                            ->maxSize(4096)
                            ->required()
                            ->helperText('Sube el archivo PDF con un máximo de 4 MB.'),
                    ]),

            ]);
    }
}
