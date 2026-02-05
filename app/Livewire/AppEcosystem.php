<?php

namespace App\Livewire;

use Livewire\Component;
use Modules\Sica\Models\App; // Importamos el modelo desde el módulo
use Modules\Sica\Models\Module;


class AppEcosystem extends Component
{

    public function render()
    {
        // Cargamos los módulos y sus apps de un solo golpe
        $modules = Module::with('apps')->get();

        return view('livewire.app-ecosystem', compact('modules'));
    }
}
