<?php

namespace Modules\Sica\Filament\SicaAdmin\Resources\Apprentices\Pages;

use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;
use Modules\Sica\Filament\SicaAdmin\Resources\Apprentices\ApprenticeResource;

class ListApprentices extends ListRecords
{
    protected static string $resource = ApprenticeResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
