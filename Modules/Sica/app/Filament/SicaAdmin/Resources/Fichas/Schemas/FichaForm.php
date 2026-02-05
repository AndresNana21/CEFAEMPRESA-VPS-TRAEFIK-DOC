<?php

namespace Modules\Sica\Filament\SicaAdmin\Resources\Fichas\Schemas;

use App\Models\User;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Notifications\Notification;
use Filament\Schemas\Components\Grid;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;
use Modules\Sica\Models\Program;

class FichaForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Section::make('Detalles del registro')
                    ->description('Completa los datos básicos y define el estado del registro.')
                    ->icon('heroicon-o-clipboard-document')
                    ->schema([
                        Grid::make(2)->schema([
                            TextInput::make('number')
                                ->label('Número de registro')
                                ->placeholder('Ejemplo: 001, 002, 003...')
                                ->numeric()
                                ->required()
                                ->helperText('Introduce un número identificador único.'),

                            Select::make('state')
                                ->label('Estado')
                                ->options([
                                    'active' => 'Activo',
                                    'inactive' => 'Inactivo',
                                ])
                                ->searchable()
                                ->preload()
                                ->required()
                                ->helperText('Define si este registro está activo o inactivo.'),
                        ]),

                        Grid::make(2)->schema([
                            DatePicker::make('start_date')
                                ->label('Fecha de inicio')
                                ->required()
                                ->helperText('Selecciona la fecha en la que comienza el registro.'),

                            DatePicker::make('start_productive')
                                ->label('Fecha de inicio de productiva')
                                ->required()
                                ->afterStateUpdated(function ($state, callable $get, callable $set) {
                                    $start = $get('start_date');
                                    if ($start && $state <= $start) {
                                        $set('start_productive', null);
                                        Notification::make()
                                            ->title('La fecha de inicio productiva no puede ser anterior o igual a la de inicio')
                                            ->danger()
                                            ->send();
                                    }
                                })
                                ->helperText('Debe ser posterior a la fecha de inicio.'),

                            DatePicker::make('end_date')
                                ->label('Fecha de finalización')
                                ->required()
                                ->afterStateUpdated(function ($state, callable $get, callable $set) {
                                    $start = $get('start_productive');
                                    if ($start && $state <= $start) {
                                        $set('end_date', null);
                                        Notification::make()
                                            ->title('La fecha de finalización no puede ser anterior o igual a la de inicio y productiva')
                                            ->danger()
                                            ->send();
                                    }
                                })
                                ->helperText('Debe ser posterior a la fecha de inicio y productiva.'),
                        ]),
                    ]),

                Section::make('Asignaciones')
                    ->description('Selecciona el programa y la fase asociada a este registro.')
                    ->icon('heroicon-o-rectangle-stack')
                    ->schema([
                        Grid::make(2)->schema([
                            Select::make('program_id')
                                ->label('Programa asociado')
                                ->options(Program::pluck('name', 'id'))
                                ->searchable()
                                ->preload()
                                ->required()
                                ->helperText('Selecciona el programa al cual pertenece este registro.'),


                            Select::make('user_id')
                                ->label('Lider de la ficha')
                                ->options(User::pluck('name', 'id'))
                                ->searchable()
                                ->preload()
                                ->required()
                                ->helperText('Selecciona el lider al cual pertenece este registro.'),


                        ]),
                    ]),

            ]);
    }
}
