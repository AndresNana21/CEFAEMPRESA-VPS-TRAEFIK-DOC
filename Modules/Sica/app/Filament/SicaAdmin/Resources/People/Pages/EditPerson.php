<?php

namespace Modules\Sica\Filament\SicaAdmin\Resources\People\Pages;

use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;
use Modules\Sica\Filament\SicaAdmin\Resources\People\PersonResource;

class EditPerson extends EditRecord
{
    protected static string $resource = PersonResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}
