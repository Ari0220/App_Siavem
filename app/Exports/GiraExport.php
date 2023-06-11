<?php

namespace App\Exports;

use DB;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Maatwebsite\Excel\Concerns\WithStyles;
use PhpOffice\PhpSpreadsheet\Worksheet\Worksheet;
use PhpOffice\PhpSpreadsheet\Style\Alignment;
use PhpOffice\PhpSpreadsheet\Style\Border;
use PhpOffice\PhpSpreadsheet\Style\Fill;

class GiraExport implements FromCollection, WithHeadings, ShouldAutoSize, WithStyles
{
    /**
     * @return \Illuminate\Support\Collection
     */
    public function headings(): array
    {
        return [
            'Categoria',
            'Departamento',
            'Empleado',
            'Objetivo',
            'Cantidad de Personas',
            'Fecha Salida',
            'Fecha Regreso',
            'Hora de salida',
            'Hora de regreso',
            'Lugar',
            'Observaciones',
            'Chofer',
            'Estado',
            'Placa',
        ];
    }

    public function collection()
    {
        $datos = DB::table('formularios')
            ->select(
                'categorias.nombre',
                'departamentos.nombreDepa',
                'em1.NombreEmple',
                'formularios.Objetivo',
                'formularios.NumePersonas',
                'formularios.FechaSalida',
                'formularios.FechaRegreso',
                'formularios.HoraS',
                'formularios.HoraR',
                'formularios.Lugar',
                'formularios.Observaciones',
                'em2.NombreEmple as chofer',
                'formularios.estado',
                'formularios.placa'
            )
            ->join('categorias', 'categorias.id', '=', 'formularios.categoria_id')
            ->join('departamentos', 'departamentos.idDepartamento', '=', 'formularios.depar_id')
            ->join('empleados as em1', 'em1.idEmpleados', '=', 'formularios.emple_id')
            ->join('empleados as em2', 'em2.idEmpleados', '=', 'formularios.chofer')
            ->get();

        return $datos;
    }

    public function styles(Worksheet $sheet)
    {
        return [
            // Style the first row as bold text.
            1 => [
                'font' => ['bold' => true],
                'alignment' => ['horizontal' => Alignment::HORIZONTAL_CENTER],
                'fill' => [
                    'fillType' => Fill::FILL_SOLID,
                    'startColor' => ['rgb' => 'DDDDDD']
                ],
            ],
        ];
    }
}
