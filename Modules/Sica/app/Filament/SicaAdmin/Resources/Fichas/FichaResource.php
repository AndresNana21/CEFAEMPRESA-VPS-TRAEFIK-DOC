<?php

namespace Modules\Sica\Filament\SicaAdmin\Resources\Fichas;

use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;
use Modules\Sica\Filament\SicaAdmin\Resources\Fichas\Pages\CreateFicha;
use Modules\Sica\Filament\SicaAdmin\Resources\Fichas\Pages\EditFicha;
use Modules\Sica\Filament\SicaAdmin\Resources\Fichas\Pages\ListFichas;
use Modules\Sica\Filament\SicaAdmin\Resources\Fichas\Schemas\FichaForm;
use Modules\Sica\Filament\SicaAdmin\Resources\Fichas\Tables\FichasTable;
use Modules\Sica\Models\Ficha;

class FichaResource extends Resource
{
    protected static ?string $model = Ficha::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    public static function form(Schema $schema): Schema
    {
        return FichaForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return FichasTable::configure($table);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => ListFichas::route('/'),
            'create' => CreateFicha::route('/create'),
            'edit' => EditFicha::route('/{record}/edit'),
        ];
    }
}
