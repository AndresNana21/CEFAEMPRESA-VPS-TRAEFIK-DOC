<?php

namespace Modules\Sica\Filament\SicaAdmin\Resources\Pashes\Schemas;

use Filament\Schemas\Schema;
use Filament\Actions\Action;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Notifications\Notification;
use Filament\Schemas\Components\Grid;
use Filament\Schemas\Components\Section;
use Modules\sica\Models\Pashe;

class PasheForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Section::make('Detalles principales')
                    ->description('Completa la información básica y define el estado y las fechas del registro.')
                    ->icon('heroicon-o-calendar-days')
                    ->schema([
                        Grid::make(2)->schema([
                            TextInput::make('number')
                                ->label('Número de registro')
                                ->placeholder('Ejemplo: 001, 002...')
                                ->numeric()
                                ->required()
                                ->helperText('Campo numérico obligatorio para identificar el registro.'),

                            Select::make('state')
                                ->label('Estado')
                                ->options([
                                    'active' => 'Activo',
                                    'inactive' => 'Inactivo',
                                ])
                                ->searchable()
                                ->preload()
                                ->required()
                                ->helperText('Define si este registro se encuentra activo o inactivo.'),
                        ]),

                        Grid::make(2)->schema([
                            DatePicker::make('start_date')
                                ->label('Fecha de inicio')
                                ->required()
                                ->helperText('Selecciona la fecha en la que inicia el registro.'),

                            DatePicker::make('end_date')
                                ->label('Fecha de finalización')
                                ->required()
                                ->afterStateUpdated(function ($state, callable $get, callable $set) {
                                    $start = $get('start_date');
                                    if ($start && $state <= $start) {
                                        $set('end_date', null);
                                        Notification::make()
                                            ->title('La fecha de finalización no puede ser anterior o igual a la de inicio.')
                                            ->danger()
                                            ->send();
                                    }

                                    $pashes = Pashe::all();


                                    $end = $get('end_date');
                                    foreach ($pashes as $pashe) {
                                        if ($start >= $pashe->start_date && $end <= $pashe->end_date) {
                                            $set('end_date', null);
                                            Notification::make()
                                                ->title('Se encontro que una face existente ya avarca el rango que solicitas')
                                                ->danger()
                                                ->send();
                                        }

                                        if ($start <= $pashe->end_date) {
                                            $set('end_date', null);
                                            Notification::make()
                                                ->title('La fecha de inciio es menor o igual a una fecha final de otra face')
                                                ->danger()
                                                ->send();
                                        }



                                        if ($pashe->state == "active") {
                                            $set('state', null);
                                            Notification::make()
                                                ->title('Se encontro otra face activa, no puedes crear una nueva hasta desactivar la anterior')
                                                ->danger()
                                                ->send();
                                        }
                                    }
                                })
                                ->helperText('Debe ser una fecha posterior a la de inicio.'),
                        ]),
                    ])
            ]);
    }
}
