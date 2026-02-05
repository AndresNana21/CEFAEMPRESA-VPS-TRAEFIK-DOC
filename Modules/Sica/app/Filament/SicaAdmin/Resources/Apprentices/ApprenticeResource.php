<?php

namespace Modules\Sica\Filament\SicaAdmin\Resources\Apprentices;

use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;
use Modules\Sica\Filament\SicaAdmin\Resources\Apprentices\Pages\CreateApprentice;
use Modules\Sica\Filament\SicaAdmin\Resources\Apprentices\Pages\EditApprentice;
use Modules\Sica\Filament\SicaAdmin\Resources\Apprentices\Pages\ListApprentices;
use Modules\Sica\Filament\SicaAdmin\Resources\Apprentices\Schemas\ApprenticeForm;
use Modules\Sica\Filament\SicaAdmin\Resources\Apprentices\Tables\ApprenticesTable;
use Modules\Sica\Models\Apprentice;

class ApprenticeResource extends Resource
{
    protected static ?string $model = Apprentice::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;



    // 1. EL NOMBRE EN EL MENÚ (Sobre nombre)
    protected static ?string $navigationLabel = 'Aprendices';

    // 2. EL GRUPO (Desplegable)
    public static function getNavigationGroup(): ?string
    {
        return 'Gestión de Usuarios';
    }
    public static function form(Schema $schema): Schema
    {
        return ApprenticeForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return ApprenticesTable::configure($table);
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
            'index' => ListApprentices::route('/'),
            'create' => CreateApprentice::route('/create'),
            'edit' => EditApprentice::route('/{record}/edit'),
        ];
    }
}
