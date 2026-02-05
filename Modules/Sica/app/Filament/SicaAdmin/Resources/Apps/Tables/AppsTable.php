<?php

namespace Modules\Sica\Filament\SicaAdmin\Resources\Apps\Tables;

use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Tables\Table;

use Filament\Actions\ActionGroup;
use Filament\Actions\ViewAction;
use Filament\Tables\Columns\TextColumn;


class AppsTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                // 📛 Nombre
                TextColumn::make('name')
                    ->label('Nombre')
                    ->searchable()
                    ->sortable()
                    ->toggleable()
                    ->limit(25),

                // 🧾 Descripción (mostrada solo si no la quieres como tooltip arriba)
                TextColumn::make('description')
                    ->label('Descripción')
                    ->limit(40)
                    ->tooltip(fn($record) => $record->description)
                    ->toggleable()
                    ->searchable(),

                // 🎨 Ícono visual
                TextColumn::make('icon')
                    ->label('Ícono')
                    ->icon(fn(string $state): string => $state)
                    ->alignCenter()
                    ->toggleable()
                    ->tooltip('Ícono asignado a la aplicación'),

                // 🌐 URL
                TextColumn::make('url')
                    ->label('URL')
                    ->url(fn($record) => $record->url)
                    ->copyable()
                    ->badge()
                    ->color('info')
                    ->icon('heroicon-o-link')
                    ->toggleable()
                    ->searchable(),

                // ⚙️ Estado (is_active)
                \Filament\Tables\Columns\IconColumn::make('is_active')
                    ->label('Estado')
                    ->boolean()
                    ->trueIcon('heroicon-o-check-circle')
                    ->falseIcon('heroicon-o-x-circle')
                    ->trueColor('success')
                    ->falseColor('danger')
                    ->toggleable()
                    ->tooltip(fn($record) => $record->is_active ? 'Activa' : 'Inactiva'),




                // 📅 Fecha de creación
                TextColumn::make('created_at')
                    ->label('Creado')
                    ->dateTime('d M Y, H:i')
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),

                // ♻️ Última actualización
                TextColumn::make('updated_at')
                    ->label('Actualizado')
                    ->dateTime('d M Y, H:i')
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                //
            ])
            ->recordActions([
                ActionGroup::make([
                    ViewAction::make(),
                    EditAction::make(),

                ])
                    ->icon('heroicon-m-ellipsis-vertical') // Menú de tres puntos
                    ->label('Acciones')
            ])
            ->toolbarActions([
                BulkActionGroup::make([
                    DeleteBulkAction::make(),
                ]),
            ]);
    }
}
