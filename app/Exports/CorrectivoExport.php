<?php

namespace App\Exports;

use DB;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class CorrectivoExport implements FromCollection,WithHeadings
{
       /**
    * @return \Illuminate\Support\Collection
    */
    public function headings(): array
    {
        return [
            'Placa',
            'Taller',
            'Fecha deSalida',
            'Fecha de Reingreso',
            'Horimetro',
            'Detalle',
            'Monto',
            
        ];
    }
    public function collection()
    {
        $datos = DB::table('correctivos')
        ->select('unidades.placa','talleres.NombreTaller',
        'correctivos.FechaSalida','correctivos.FechaReingreso','correctivos.Horimetro',
        'correctivos.Detalle','correctivos.Monto')
        ->join('unidades', 'unidades.idUnidad', '=', 'correctivos.unidad_id')
        ->join('talleres', 'talleres.idTaller', '=', 'correctivos.taller_id')
        ->get();
         return $datos;

    }
}
