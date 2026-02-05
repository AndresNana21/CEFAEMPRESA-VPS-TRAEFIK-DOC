<?php

namespace Modules\Sica\Filament\SicaAdmin\Resources\Apps;

use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;
use Modules\Sica\Filament\SicaAdmin\Resources\Apps\Pages\CreateApp;
use Modules\Sica\Filament\SicaAdmin\Resources\Apps\Pages\EditApp;
use Modules\Sica\Filament\SicaAdmin\Resources\Apps\Pages\ListApps;
use Modules\Sica\Filament\SicaAdmin\Resources\Apps\Schemas\AppForm;
use Modules\Sica\Filament\SicaAdmin\Resources\Apps\Tables\AppsTable;
use Modules\Sica\Models\App;

class AppResource extends Resource
{
    protected static ?string $model = App::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    // 1. EL NOMBRE EN EL MENÚ (Sobre nombre)
    protected static ?string $navigationLabel = 'Aplicaciones';

    // 2. EL GRUPO (Desplegable)
    public static function getNavigationGroup(): ?string
    {
        return 'Gesion sitema';
    }
    public static function form(Schema $schema): Schema
    {
        return AppForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return AppsTable::configure($table);
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
            'index' => ListApps::route('/'),
            'create' => CreateApp::route('/create'),
            'edit' => EditApp::route('/{record}/edit'),
        ];
    }
}
