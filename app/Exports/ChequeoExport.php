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
use PhpOffice\PhpSpreadsheet\Worksheet\Drawing;

class ChequeoExport implements FromCollection, WithHeadings, ShouldAutoSize, WithStyles
{
    /**
     * @return \Illuminate\Support\Collection
     */
    public function headings(): array
    {
        return [
            'FechaChequeo',
            'Kilometraje',
            'Combustible',
            'LuzBaja',
            'LuzAlta',
            'LuzMarcha',
            'LuzInterior',
            'LuzFreno',
            'Intermitentes',
            'LuzParking',
            'Alojenos',
            'Escobillas',
            'Extintor',
            'Botiquin',
            'Triangulos',
            'Cinturon',
            'ChapaPuerta',
            'Pito',
            'Parabrisas',
            'VidriosLaterales',
            'Climatizacion',
            'Bateria',
            'NivelRefrigeracion',
            'NivelAceite',
            'Alfombras',
            'Radio',
            'AsientosD',
            'AsientosT',
            'PermisosCirculacion',
            'RTV',
            'TituloPropiedad',
            'LlantaDelantera',
            'LlantaRepuesto',
            'LlantaTrasera',
            'Tuercas',
            'EspejoRetrovisor',
            'Gata',
            'LlaveRana',
            'Lingas',
            'JuegoLlaves',
            'Bumper',
        ];
    }

    public function collection()
    {
        $datos = DB::table('chequeos')
            ->select(
                'chequeos.FechaChequeo',
                'chequeos.Kilometraje',
                'chequeos.Combustible',
                'chequeos.LuzBaja',
                'chequeos.LuzAlta',
                'chequeos.LuzMarcha',
                'chequeos.LuzInterior',
                'chequeos.LuzFreno',
                'chequeos.Intermitentes',
                'chequeos.LuzParking',
                'chequeos.Alojenos',
                'chequeos.Escobillas',
                'chequeos.Extintor',
                'chequeos.Botiquin',
                'chequeos.Triangulos',
                'chequeos.Cinturon',
                'chequeos.ChapaPuerta',
                'chequeos.Pito',
                'chequeos.Parabrisas',
                'chequeos.VidriosLaterales',
                'chequeos.Climatizacion',
                'chequeos.Bateria',
                'chequeos.NivelRefrigeracion',
                'chequeos.NivelAceite',
                'chequeos.Alfombras',
                'chequeos.Radio',
                'chequeos.AsientosD',
                'chequeos.AsientosD',
                'chequeos.PermisosCirculacion',
                'chequeos.RTV',
                'chequeos.TituloPropiedad',
                'chequeos.LlantaDelantera',
                'chequeos.LlantaRepuesto',
                'chequeos.LlantaTrasera',
                'chequeos.Tuercas',
                'chequeos.EspejoRetrovisor',
                'chequeos.Gata',
                'chequeos.LlaveRana',
                'chequeos.Lingas',
                'chequeos.JuegoLlaves',
                'chequeos.Bumper'
            )
            ->join('unidades', 'unidades.idUnidad', '=', 'chequeos.unidad_id')
            ->get();

        return $datos;
    }

    public function styles(Worksheet $sheet)
    {
        return [
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


