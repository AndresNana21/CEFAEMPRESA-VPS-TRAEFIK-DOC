<?php

namespace Modules\Sica\Filament\SicaAdmin\Resources\Programs;

use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;
use Modules\Sica\Filament\SicaAdmin\Resources\Programs\Pages\CreateProgram;
use Modules\Sica\Filament\SicaAdmin\Resources\Programs\Pages\EditProgram;
use Modules\Sica\Filament\SicaAdmin\Resources\Programs\Pages\ListPrograms;
use Modules\Sica\Filament\SicaAdmin\Resources\Programs\Schemas\ProgramForm;
use Modules\Sica\Filament\SicaAdmin\Resources\Programs\Tables\ProgramsTable;
use Modules\Sica\Models\Program;

class ProgramResource extends Resource
{
    protected static ?string $model = Program::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    public static function form(Schema $schema): Schema
    {
        return ProgramForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return ProgramsTable::configure($table);
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
            'index' => ListPrograms::route('/'),
            'create' => CreateProgram::route('/create'),
            'edit' => EditProgram::route('/{record}/edit'),
        ];
    }
}
