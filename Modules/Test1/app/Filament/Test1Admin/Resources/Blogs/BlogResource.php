<?php

namespace Modules\Test1\Filament\Test1Admin\Resources\Blogs;

use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;
use Modules\Test1\Filament\Test1Admin\Resources\Blogs\Pages\CreateBlog;
use Modules\Test1\Filament\Test1Admin\Resources\Blogs\Pages\EditBlog;
use Modules\Test1\Filament\Test1Admin\Resources\Blogs\Pages\ListBlogs;
use Modules\Test1\Filament\Test1Admin\Resources\Blogs\Schemas\BlogForm;
use Modules\Test1\Filament\Test1Admin\Resources\Blogs\Tables\BlogsTable;
use Modules\Test1\Models\Blog;

class BlogResource extends Resource
{
    protected static ?string $model = Blog::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    protected static ?string $recordTitleAttribute = 'name';

    public static function form(Schema $schema): Schema
    {
        return BlogForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return BlogsTable::configure($table);
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
            'index' => ListBlogs::route('/'),
            'create' => CreateBlog::route('/create'),
            'edit' => EditBlog::route('/{record}/edit'),
        ];
    }
}
