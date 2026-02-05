<?php

namespace Modules\Sica\Filament\SicaAdmin\Resources\People\Pages;

use Filament\Resources\Pages\CreateRecord;
use Modules\Sica\Filament\SicaAdmin\Resources\People\PersonResource;

class CreatePerson extends CreateRecord
{
    protected static string $resource = PersonResource::class;
}
