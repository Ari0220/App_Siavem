<?php

namespace App\Exports;

use DB;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class PreventivoExport implements FromCollection,WithHeadings
{
       /**
    * @return \Illuminate\Support\Collection
    */
    public function headings(): array
    {
        return [
            'Placa',
            'Taller',
            'Fecha Mantenimiento',
            'Horimetro',
            'Proximo Servicio',
            'Monto',
            
        ];
    }
    public function collection()
    {
        $datos = DB::table('preventivos')
        ->select('unidades.placa','talleres.NombreTaller',
        'preventivos.FechaMant','preventivos.tipoMante','preventivos.Horimetro',
        'preventivos.ProximoSer','preventivos.Monto')
        ->join('unidades', 'unidades.idUnidad', '=', 'preventivos.unidad_id')
        ->join('talleres', 'talleres.idTaller', '=', 'preventivos.taller_id')
        ->get();
         return $datos;

    }
}
