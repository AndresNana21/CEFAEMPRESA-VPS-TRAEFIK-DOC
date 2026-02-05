<?php

namespace Modules\Sica\Filament\SicaAdmin\Resources\Apps\Pages;

use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;
use Modules\Sica\Filament\SicaAdmin\Resources\Apps\AppResource;

class EditApp extends EditRecord
{
    protected static string $resource = AppResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}
