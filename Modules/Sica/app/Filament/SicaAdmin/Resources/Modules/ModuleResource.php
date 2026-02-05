<?php

namespace Modules\Sica\Filament\SicaAdmin\Resources\Modules;

use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;
use Modules\Sica\Filament\SicaAdmin\Resources\Modules\Pages\CreateModule;
use Modules\Sica\Filament\SicaAdmin\Resources\Modules\Pages\EditModule;
use Modules\Sica\Filament\SicaAdmin\Resources\Modules\Pages\ListModules;
use Modules\Sica\Filament\SicaAdmin\Resources\Modules\Schemas\ModuleForm;
use Modules\Sica\Filament\SicaAdmin\Resources\Modules\Tables\ModulesTable;
use Modules\Sica\Models\Module;

class ModuleResource extends Resource
{
    protected static ?string $model = Module::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    // 1. EL NOMBRE EN EL MENÚ (Sobre nombre)
    protected static ?string $navigationLabel = 'Modulos';

    // 2. EL GRUPO (Desplegable)
    public static function getNavigationGroup(): ?string
    {
        return 'Gesion sitema';
    }
    public static function form(Schema $schema): Schema
    {
        return ModuleForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return ModulesTable::configure($table);
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
            'index' => ListModules::route('/'),
            'create' => CreateModule::route('/create'),
            'edit' => EditModule::route('/{record}/edit'),
        ];
    }
}
