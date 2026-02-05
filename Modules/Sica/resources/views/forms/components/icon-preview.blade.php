<div
    class="flex flex-col items-center justify-center w-full h-24 border border-gray-200 dark:border-gray-700 rounded-lg bg-gray-50 dark:bg-gray-800">
    @if ($get('icon'))
    <x-filament::icon :icon="$get('icon')" class="text-primary-600"
        style="width:100px;height:100px;display:inline-flex;align-items:center;justify-content:center;">
        <style>
            .fi-icon svg {
                width: 100px !important;
                height: 100px !important;
            }
        </style>
    </x-filament::icon>
    @else
    <span class="text-gray-400 text-sm">Seleccione un ícono</span>
    @endif
</div>
