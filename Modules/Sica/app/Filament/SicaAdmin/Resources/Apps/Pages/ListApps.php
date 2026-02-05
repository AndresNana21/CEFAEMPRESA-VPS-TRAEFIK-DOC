<?php

namespace Modules\Sica\Filament\SicaAdmin\Resources\Apps\Pages;

use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;
use Modules\Sica\Filament\SicaAdmin\Resources\Apps\AppResource;

class ListApps extends ListRecords
{
    protected static string $resource = AppResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
