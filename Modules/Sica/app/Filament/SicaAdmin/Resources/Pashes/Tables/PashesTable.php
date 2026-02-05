<?php

namespace Modules\Sica\Filament\SicaAdmin\Resources\Pashes\Tables;

use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Tables\Table;
use Filament\Actions\Action;
use Filament\Forms\Components\FileUpload;
use Filament\Tables\Columns\TextColumn;

use Maatwebsite\Excel\Facades\Excel;

use Filament\Notifications\Notification;

use Modules\Sica\Services\TestService;
use Modules\Sica\Services\PhasesImport;

class PashesTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->headerActions([

                Action::make('importExcel')
                    ->label('Importar Excel')
                    ->icon('heroicon-o-document-arrow-up')
                    ->color('success')
                    ->form([
                        FileUpload::make('attachment')
                            ->label('Archivo Excel')
                            ->disk('public')
                            ->directory('imports')
                            ->required(),
                    ])
                    ->action(function (array $data) {
                        $file = storage_path('app/public/' . $data['attachment']);

                        try {
                            Excel::import(new PhasesImport, $file);

                            Notification::make()
                                ->title('Fases importadas con éxito')
                                ->success()
                                ->send();
                        } catch (\Exception $e) {
                            Notification::make()
                                ->title('Error en la importación')
                                ->body($e->getMessage())
                                ->danger()
                                ->send();
                        }
                    })
            ])
            ->columns([
                TextColumn::make('number')
                    ->searchable()
                    ->toggleable(),
                TextColumn::make('start_date')
                    ->date()
                    ->sortable()
                    ->toggleable(),
                TextColumn::make('end_date')
                    ->date()
                    ->sortable()
                    ->toggleable(),
                TextColumn::make('state')
                    ->searchable()
                    ->toggleable(),
                TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                TextColumn::make('updated_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                //
            ])
            ->recordActions([
                EditAction::make(),
            ])
            ->toolbarActions([
                BulkActionGroup::make([
                    DeleteBulkAction::make(),
                ]),
            ]);
    }
}
