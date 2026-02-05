<?php

namespace Modules\Sica\Filament\SicaAdmin\Resources\Pashes\Pages;

use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;
use Modules\Sica\Filament\SicaAdmin\Resources\Pashes\PasheResource;

class EditPashe extends EditRecord
{
    protected static string $resource = PasheResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}
