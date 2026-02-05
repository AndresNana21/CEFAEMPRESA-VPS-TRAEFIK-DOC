<?php

namespace Modules\Sica\Services;

use Modules\Sica\Models\Pashe;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Filament\Notifications\Notification;
use Carbon\Carbon;

class PhasesImport implements ToModel, WithHeadingRow
{
    public function model(array $row)
    {
        $numero = $row['numero'];
        $start = Carbon::parse($row['fecha_inicio']);
        $end = Carbon::parse($row['fecha_fin']);
        $state = strtolower($row['estado']);

        // 1. Validación: Fecha fin posterior a inicio
        if ($end->lessThanOrEqualTo($start)) {
            $this->sendError("Error en fila (Número: $numero): La fecha de fin debe ser posterior a la de inicio.");
            return null; // Salta esta fila y no la guarda
        }

        // 2. Validación: Solo una fase activa a la vez
        if ($state === 'active') {
            $activeExists = Pashe::where('state', 'active')->exists();
            if ($activeExists) {
                $this->sendError("No se pudo importar la fase $numero: Ya existe una fase activa en el sistema.");
                return null;
            }
        }

        // 3. Validación: Evitar solapamiento de fechas (Rango ya ocupado)
        $overlap = Pashe::where(function ($query) use ($start, $end) {
            $query->whereBetween('start_date', [$start, $end])
                ->orWhereBetween('end_date', [$start, $end])
                ->orWhere(function ($q) use ($start, $end) {
                    $q->where('start_date', '<=', $start)
                        ->where('end_date', '>=', $end);
                });
        })->exists();

        if ($overlap) {
            $this->sendError("Error en fila $numero: Las fechas coinciden con una fase ya existente.");
            return null;
        }

        // Si todo está bien, creamos el registro
        return new Pashe([
            'number'     => $numero,
            'start_date' => $start,
            'end_date'   => $end,
            'state'      => $state,
        ]);
    }

    // Función auxiliar para lanzar las alertas de Filament
    private function sendError($message)
    {
        Notification::make()
            ->title('Error en importación de Excel')
            ->body($message)
            ->danger()
            ->persistent() // Para que el usuario tenga tiempo de leerlo
            ->send();
    }

    public static function test()
    {
        Notification::make()
            ->title('¡Servicio conectado!')
            ->body('El Resource logró llamar exitosamente al método test() dentro del módulo SICA.')
            ->success()
            ->send();
    }
}
