<?php

namespace Modules\Sica\Filament\SicaAdmin\Resources\Apprentices\Pages;

use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;
use Modules\Sica\Filament\SicaAdmin\Resources\Apprentices\ApprenticeResource;

class EditApprentice extends EditRecord
{
    protected static string $resource = ApprenticeResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}
