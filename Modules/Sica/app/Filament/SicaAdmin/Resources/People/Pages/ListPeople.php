<?php

namespace Modules\Sica\Filament\SicaAdmin\Resources\People\Pages;

use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;
use Modules\Sica\Filament\SicaAdmin\Resources\People\PersonResource;

class ListPeople extends ListRecords
{
    protected static string $resource = PersonResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
