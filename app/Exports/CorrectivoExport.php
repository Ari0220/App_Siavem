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


class CorrectivoExport implements FromCollection, WithHeadings, ShouldAutoSize, WithStyles
{
    /**
     * @return \Illuminate\Support\Collection
     */
    public function headings(): array
    {
        return [
            'Placa',
            'Taller',
            'Fecha de Salida',
            'Fecha de Reingreso',
            'Horimetro',
            'Detalle',
            'Monto',
        ];
    }

    public function collection()
    {
        $datos = DB::table('correctivos')
            ->select(
                'unidades.placa',
                'talleres.NombreTaller',
                'correctivos.FechaSalida',
                'correctivos.FechaReingreso',
                'correctivos.Horimetro',
                'correctivos.Detalle',
                'correctivos.Monto'
            )
            ->join('unidades', 'unidades.idUnidad', '=', 'correctivos.unidad_id')
            ->join('talleres', 'talleres.idTaller', '=', 'correctivos.taller_id')
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
