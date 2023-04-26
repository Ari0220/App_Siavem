<?php

namespace App\Exports;

use DB;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class TallerExport implements FromCollection,WithHeadings
{
       /**
    * @return \Illuminate\Support\Collection
    */
    public function headings(): array
    {
        return [
            'Contratacion',
            'Nombre',
            'Direccion',
            'Descripcion',
            'Fecha de Vencimiento',
         
            
        ];
    }
    public function collection()
    {
        $datos = DB::table('talleres')
        ->select('talleres.Contratacion','talleres.NombreTaller',
        'talleres.DireccionTaller','talleres.DescripcionEsp','talleres.FechaVenTaller')
        ->get();
         return $datos;

    }
}
