<?php

namespace Modules\Sica\Livewire;

use Livewire\Component;
use Modules\Sica\Models\App;

class AppEcosystem extends Component
{
    public function render()
    {
        // Traemos solo las apps activas
        $apps = App::where('is_active', true)->get();

        return view('sica::livewire.app-ecosystem', [
            'apps' => $apps,
            'count' => $apps->count()
        ]);
    }
}
