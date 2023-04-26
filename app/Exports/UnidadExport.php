<?php

namespace App\Exports;

use DB;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class UnidadExport implements FromCollection,WithHeadings
{
       /**
    * @return \Illuminate\Support\Collection
    */
    public function headings(): array
    {
        return [
            'Categoria',
            'Tracción',
            'Combustible',
            'Estado',
            'Placa',
            'Marca',
            'Modelo',
            'Estilo',
            'Color',
            'Año de fabricación',
            'Contratación',
            'Valor de adquisición',
            'Valor de Hacienda',
            'RTV',
            'Descripción',
            
        ];
    }
    public function collection()
    {
        $datos = DB::table('unidades')
        ->select('categorias.nombre as categoria','tracciones.nombreTraccion', 'combustibles.nombreCombustibles', 'estados.nombreEstados','unidades.placa',
        'unidades.placa','unidades.marca','unidades.modelo','unidades.estilo','unidades.color','unidades.ayoFabricacion','unidades.contratacion','unidades.valorAdqui',
        'unidades.valorHacienda','unidades.RVT','unidades.descripcion',)
        ->join('categorias', 'categorias.id', '=', 'unidades.categoria_id')
        ->join('tracciones', 'tracciones.idTraccion', '=', 'unidades.tracciones_id')
        ->join('combustibles', 'combustibles.idCombustibles', '=', 'unidades.combustibles_id')
        ->join('estados', 'estados.idEstados', '=', 'unidades.estados_id')
        ->get();
         return $datos;

    }
}
