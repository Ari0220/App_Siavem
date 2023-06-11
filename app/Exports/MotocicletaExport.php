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

class MotocicletaExport implements FromCollection, WithHeadings, ShouldAutoSize, WithStyles
{
    /**
     * @return \Illuminate\Support\Collection
     */
    public function headings(): array
    {
        return [
            'Fecha de Inspeccion',
            'Kilometraje',
            'Combustible',
            'Luz Baja',
            'Luz Alta',
            'Luz de Marcha',
            'Pito',
            'Batería',
            'Nivel de Refrigeración',
            'Nivel de Aceite',
            'Asientos',
            'Permisos de Circulación',
            'RTV',
            'Título de Propiedad',
            'Llanta Delantera',
            'Llanta Trasera',
            'Espejo Retrovisor Derecho',
            'Espejo Retrovisor Izquierdo',
        ];
    }

    public function collection()
    {
        $datos = DB::table('motocicletas')
            ->select(
                'motocicletas.FechaChequeoM',
                'motocicletas.Kilometraje',
                'motocicletas.Combustible',
                'motocicletas.LuzBaja',
                'motocicletas.LuzAlta',
                'motocicletas.LuzMarcha',
                'motocicletas.Pito',
                'motocicletas.Bateria',
                'motocicletas.NivelRefrigeracion',
                'motocicletas.NivelAceite',
                'motocicletas.Asientos',
                'motocicletas.PermisosCirculacion',
                'motocicletas.RTV',
                'motocicletas.TituloPropiedad',
                'motocicletas.LlantaDelantera',
                'motocicletas.LlantaTrasera',
                'motocicletas.EspejoRetrovisorD',
                'motocicletas.EspejoRetrovisori'
            )
            ->join('unidades', 'unidades.idUnidad', '=', 'motocicletas.unidad_id')
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
