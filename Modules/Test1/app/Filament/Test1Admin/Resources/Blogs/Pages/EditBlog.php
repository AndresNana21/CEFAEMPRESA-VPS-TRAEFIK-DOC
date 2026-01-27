<?php

namespace Modules\Test1\Filament\Test1Admin\Resources\Blogs\Pages;

use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;
use Modules\Test1\Filament\Test1Admin\Resources\Blogs\BlogResource;

class EditBlog extends EditRecord
{
    protected static string $resource = BlogResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}
