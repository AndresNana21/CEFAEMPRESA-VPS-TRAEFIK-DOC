<?php

namespace App\Livewire;

use Livewire\Component;
use Modules\Sica\Models\App; // Importamos el modelo desde el módulo

class AppEcosystem extends Component
{
    public function render()
    {
        // Traemos las apps del monolito que estén activas
        $apps = App::where('is_active', true)->get();

        return view('livewire.app-ecosystem', [
            'apps' => $apps,
            'count' => $apps->count()
        ]);
    }
}
