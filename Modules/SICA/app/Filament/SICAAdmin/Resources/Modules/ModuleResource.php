<?php

namespace Modules\SICA\Filament\SICAAdmin\Resources\Modules;

use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;
use Modules\SICA\Filament\SICAAdmin\Resources\Modules\Pages\CreateModule;
use Modules\SICA\Filament\SICAAdmin\Resources\Modules\Pages\EditModule;
use Modules\SICA\Filament\SICAAdmin\Resources\Modules\Pages\ListModules;
use Modules\SICA\Filament\SICAAdmin\Resources\Modules\Schemas\ModuleForm;
use Modules\SICA\Filament\SICAAdmin\Resources\Modules\Tables\ModulesTable;
use Modules\SICA\Models\Module;

class ModuleResource extends Resource
{
    protected static ?string $model = Module::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    protected static ?string $recordTitleAttribute = 'name';

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
