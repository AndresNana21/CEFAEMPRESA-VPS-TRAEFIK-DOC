<?php

namespace App\Filament\Schemas\Components;

use Filament\Schemas\Components\Component;

class Prueba extends Component
{
    protected string $view = 'filament.schemas.components.prueba';

    public static function make(): static
    {
        return app(static::class);
    }
}
