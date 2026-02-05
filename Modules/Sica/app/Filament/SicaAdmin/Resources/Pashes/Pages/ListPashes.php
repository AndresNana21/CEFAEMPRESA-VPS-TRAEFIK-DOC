<?php

namespace Modules\Sica\Filament\SicaAdmin\Resources\Pashes\Pages;

use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;
use Modules\Sica\Filament\SicaAdmin\Resources\Pashes\PasheResource;

class ListPashes extends ListRecords
{
    protected static string $resource = PasheResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
