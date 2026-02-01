<?php

namespace Modules\SICA\Filament\SICAAdmin\Resources\Modules\Pages;

use Filament\Resources\Pages\CreateRecord;
use Modules\SICA\Filament\SICAAdmin\Resources\Modules\ModuleResource;

class CreateModule extends CreateRecord
{
    protected static string $resource = ModuleResource::class;
}
