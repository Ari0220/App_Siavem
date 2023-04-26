<?php

namespace App\Exports;

use DB;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class ChequeoExport implements FromCollection,WithHeadings
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
        ->select('chequeos.FechaChequeo','chequeos.Kilometraje',
        'chequeos.Combustible','chequeos.LuzBaja','chequeos.LuzAlta',
        'chequeos.LuzMarcha','chequeos.LuzInterior','chequeos.LuzFreno','chequeos.Intermitentes',
        'chequeos.LuzParking','chequeos.Alojenos','chequeos.Escobillas',
        'chequeos.Extintor','chequeos.Botiquin','chequeos.Triangulos','chequeos.Cinturon','chequeos.ChapaPuerta',
        'chequeos.Pito',
        'chequeos.Parabrisas','chequeos.VidriosLaterales','chequeos.Climatizacion','chequeos.Bateria',
        'chequeos.NivelRefrigeracion','chequeos.NivelAceite','chequeos.Alfombras',
        'chequeos.Radio','chequeos.AsientosD','chequeos.AsientosD','chequeos.PermisosCirculacion','chequeos.RTV',
        'chequeos.TituloPropiedad',
        'chequeos.LlantaDelantera','chequeos.LlantaRepuesto','chequeos.LlantaTrasera','chequeos.Tuercas',
        'chequeos.EspejoRetrovisor','chequeos.Gata','chequeos.LlaveRana',
        'chequeos.Lingas','chequeos.JuegoLlaves','chequeos.Bumper',
        )
        ->join('unidades', 'unidades.idUnidad', '=', 'chequeos.unidad_id')
        ->get();
         return $datos;

    }
}
