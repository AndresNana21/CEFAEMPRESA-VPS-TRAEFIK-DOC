<?php

namespace Modules\Sica\Filament\SicaAdmin\Resources\Fichas\Pages;

use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;
use Modules\Sica\Filament\SicaAdmin\Resources\Fichas\FichaResource;

class EditFicha extends EditRecord
{
    protected static string $resource = FichaResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}
