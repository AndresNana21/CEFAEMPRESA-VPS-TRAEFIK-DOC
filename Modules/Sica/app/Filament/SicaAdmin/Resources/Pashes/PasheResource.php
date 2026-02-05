<?php

namespace Modules\Sica\Filament\SicaAdmin\Resources\Pashes;

use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;
use Modules\Sica\Filament\SicaAdmin\Resources\Pashes\Pages\CreatePashe;
use Modules\Sica\Filament\SicaAdmin\Resources\Pashes\Pages\EditPashe;
use Modules\Sica\Filament\SicaAdmin\Resources\Pashes\Pages\ListPashes;
use Modules\Sica\Filament\SicaAdmin\Resources\Pashes\Schemas\PasheForm;
use Modules\Sica\Filament\SicaAdmin\Resources\Pashes\Tables\PashesTable;
use Modules\Sica\Models\Pashe;

class PasheResource extends Resource
{
    protected static ?string $model = Pashe::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    protected static ?string $recordTitleAttribute = 'name';

    public static function form(Schema $schema): Schema
    {
        return PasheForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return PashesTable::configure($table);
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
            'index' => ListPashes::route('/'),
            'create' => CreatePashe::route('/create'),
            'edit' => EditPashe::route('/{record}/edit'),
        ];
    }
}
