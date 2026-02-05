<?php

namespace Modules\Sica\Filament\SicaAdmin\Resources\Modules\Pages;

use Filament\Resources\Pages\CreateRecord;
use Modules\Sica\Filament\SicaAdmin\Resources\Modules\ModuleResource;

class CreateModule extends CreateRecord
{
    protected static string $resource = ModuleResource::class;
}
