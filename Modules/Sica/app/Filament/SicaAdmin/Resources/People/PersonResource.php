<?php

namespace Modules\Sica\Filament\SicaAdmin\Resources\People;

use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;
use Modules\Sica\Filament\SicaAdmin\Resources\People\Pages\CreatePerson;
use Modules\Sica\Filament\SicaAdmin\Resources\People\Pages\EditPerson;
use Modules\Sica\Filament\SicaAdmin\Resources\People\Pages\ListPeople;
use Modules\Sica\Filament\SicaAdmin\Resources\People\Schemas\PersonForm;
use Modules\Sica\Filament\SicaAdmin\Resources\People\Tables\PeopleTable;
use Modules\Sica\Models\Person;

class PersonResource extends Resource
{
    protected static ?string $model = Person::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    public static function form(Schema $schema): Schema
    {
        return PersonForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return PeopleTable::configure($table);
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
            'index' => ListPeople::route('/'),
            'create' => CreatePerson::route('/create'),
            'edit' => EditPerson::route('/{record}/edit'),
        ];
    }
}
