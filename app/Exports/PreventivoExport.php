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

class PreventivoExport implements FromCollection, WithHeadings, ShouldAutoSize, WithStyles
{
    /**
     * @return \Illuminate\Support\Collection
     */
    public function headings(): array
    {
        return [
            'Placa',
            'Taller',
            'Fecha de Mantenimiento',
            'Tipo de Mantenimiento',
            'Horímetro',
            'Próximo Servicio',
            'Monto',
        ];
    }

    public function collection()
    {
        $datos = DB::table('preventivos')
            ->select(
                'unidades.placa',
                'talleres.NombreTaller',
                'preventivos.FechaMant',
                'preventivos.tipoMante',
                'preventivos.Horimetro',
                'preventivos.ProximoSer',
                'preventivos.Monto'
            )
            ->join('unidades', 'unidades.idUnidad', '=', 'preventivos.unidad_id')
            ->join('talleres', 'talleres.idTaller', '=', 'preventivos.taller_id')
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
