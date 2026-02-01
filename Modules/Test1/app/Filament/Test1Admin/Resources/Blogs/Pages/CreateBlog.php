<?php

namespace Modules\Test1\Filament\Test1Admin\Resources\Blogs\Pages;

use Filament\Resources\Pages\CreateRecord;
use Modules\Test1\Filament\Test1Admin\Resources\Blogs\BlogResource;

class CreateBlog extends CreateRecord
{
    protected static string $resource = BlogResource::class;
}
