<?php

namespace Modules\Test1\Filament\Test1Admin\Resources\Blogs\Pages;

use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;
use Modules\Test1\Filament\Test1Admin\Resources\Blogs\BlogResource;

class ListBlogs extends ListRecords
{
    protected static string $resource = BlogResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
