<?php

namespace App\Exports;

use DB;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class GiraExport implements FromCollection,WithHeadings
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
            'Obetivo',
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
        ->select('categorias.nombre','departamentos.nombreDepa','em1.NombreEmple',
        'formularios.Objetivo','formularios.NumePersonas','formularios.FechaSalida',
        'formularios.FechaRegreso','formularios.HoraS','formularios.HoraR',
        'formularios.Lugar','formularios.Observaciones',
        'em2.NombreEmple as chofer','formularios.estado', 'formularios.placa')
        ->join('categorias', 'categorias.id', '=', 'formularios.categoria_id')
        ->join('departamentos', 'departamentos.idDepartamento', '=', 'formularios.depar_id')
        ->join('empleados as em1', 'em1.idEmpleados', '=', 'formularios.emple_id')
        ->join('empleados as em2', 'em2.idEmpleados', '=', 'formularios.chofer')
        ->get();
         return $datos;

    }
}
