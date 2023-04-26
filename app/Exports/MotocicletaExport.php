<?php

namespace App\Exports;

use DB;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class MotocicletaExport implements FromCollection,WithHeadings
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
            'LuzBaja',
            'LuzAlta',
            'LuzMarcha',
            'Pito',
            'Bateria',
            'NivelRefrigeracion',
            'NivelAceite',
            'Asientos',
            'PermisosCirculacion',
            'RTV',
            'TituloPropiedad',
            'LlantaDelantera',
            'EspejoRetrovisorD',
            'EspejoRetrovisori',
            'documentoEnvio',
            'documentoRecibido',
            'TituloPropiedad',
        ];
    }
    public function collection()
    {
        $datos = DB::table('motocicletas')
        ->select('motocicletas.FechaChequeoM','motocicletas.Kilometraje',
        'motocicletas.Combustible','motocicletas.LuzBaja','motocicletas.LuzAlta',
        'motocicletas.LuzMarcha','motocicletas.Pito','motocicletas.Bateria','motocicletas.NivelRefrigeracion',
        'motocicletas.NivelAceite','motocicletas.Asientos','motocicletas.PermisosCirculacion',
        'motocicletas.RTV','motocicletas.TituloPropiedad','motocicletas.LlantaDelantera','motocicletas.LlantaTrasera','motocicletas.EspejoRetrovisorD',
        'motocicletas.EspejoRetrovisori')
        ->join('unidades', 'unidades.idUnidad', '=', 'motocicletas.unidad_id')
        ->get();
         return $datos;

    }
}
