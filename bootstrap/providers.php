<?php

return [
    App\Providers\AppServiceProvider::class,
    App\Providers\Filament\AdminPanelProvider::class,
    App\Providers\Filament\DasboardPanelProvider::class,

    // Providers de los paneles en los modulos para que filament-shield los detecte.
    Modules\test1\Providers\Filament\AdminPanelProvider::class
];
