<?php

namespace App\Http\Controllers;

use App\Models\Chequeo;
use App\Models\Unidade;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use PDF;

use App\Exports\ChequeoExport;
use Maatwebsite\Excel\Facades\Excel;
use App\Http\Requests\FechaChequeoRequest;


/**
 * Class ChequeoController
 * @package App\Http\Controllers
 */
class ChequeoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $chequeos = Chequeo::paginate();

        return view('chequeo.index', compact('chequeos'))
            ->with('i', (request()->input('page', 1) - 1) * $chequeos->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $chequeo = new Chequeo();
        $unidade = Unidade::pluck('placa','idUnidad');
        return view('chequeo.create', compact('chequeo','unidade'));
    }

    public function generarPDFChequeo($id){
        
        $info = Chequeo::where('idchequeos',$id)->get();

        $data = [
            'title' => 'Inspecion de Automoviles y Busetas',
            'date' => date('m/d/Y'),
            'info' => $info
        ]; 
            
        $pdf2 = PDF::loadView('chequeo.PDF2', $data);
     
        return $pdf2->download('Inspeccion Automovil .pdf');
    }


    public function generarPDF(){
        $info = Chequeo::get();
        $data = [
            'title' => 'Listado de chequeos',
            'date' => date('m/d/Y'),
            'info' => $info
        ];    
        $pdf = PDF::loadView('chequeo.PDF', $data);
        return $pdf->download('Listado de chequeos.pdf');
    }
    public function generarEXCEL(){
        ob_end_clean();
        ob_start();
        return Excel::download(new ChequeoExport, 'chequeos.xlsx');
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, FechaChequeoRequest $re)
    {
        request()->validate(Chequeo::$rules);

        $chequeo  = request()->except('_token');
         if($request->documentoEnvioC){
                $fileName = $request->documentoEnvioC->getClientOriginalName();
                $filePath = 'Chequeo2PDF/' . $fileName;
                $path = Storage::disk('public')->put($filePath, file_get_contents($request->documentoEnvioC));
                $path = Storage::disk('public')->url($path);
                $chequeo['documentoEnvioC'] = $fileName;
            }
            if($request->documentoRecibidoC){
                $fileName2 = $request->documentoRecibidoC->getClientOriginalName();
                $filePath2 = 'Chequeo2PDF/' . $fileName2;
                $path = Storage::disk('public')->put($filePath2, file_get_contents($request->documentoRecibidoC));
                $path = Storage::disk('public')->url($path);
                $chequeo['documentoRecibidoC'] = $fileName2;
                
            }
            Chequeo::insert($chequeo);
    
    
       return redirect()->route('chequeos.index')
            ->with('success', 'Chequeo creado correctamente.');
      




    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $chequeo = Chequeo::find($id);

        return view('chequeo.show', compact('chequeo'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $chequeo = Chequeo::find($id);
        $unidade = Unidade::pluck('placa','idUnidad');
        return view('chequeo.edit', compact('chequeo','unidade'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Chequeo $chequeo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Chequeo $chequeo)
    {
        request()->validate(Chequeo::$rules);
      
        $chequeos  = request()->except('_token');
        $folderPath = 'Chequeo2PDF/';

        if($chequeo['documentoEnvioC']){
            unlink($folderPath . $chequeo['documentoEnvioC']);
        }
        if($chequeo['documentoRecibidoC']){
            unlink($folderPath . $chequeo['documentoRecibidoC']);
        }
        if($request->documentoEnvioC){
            $fileName = $request->documentoEnvioC->getClientOriginalName();
            $filePath = 'Chequeo2PDF/' . $fileName;
            $path = Storage::disk('public')->put($filePath, file_get_contents($request->documentoEnvioC));
            $path = Storage::disk('public')->url($path);
            $chequeos['documentoEnvioC'] = $fileName;
        }
        if($request->documentoRecibidoC){
            $fileName2 = $request->documentoRecibidoC->getClientOriginalName();
            $filePath2 = 'Chequeo2PDF/' . $fileName2;
            $path = Storage::disk('public')->put($filePath2, file_get_contents($request->documentoRecibidoC));
            $path = Storage::disk('public')->url($path);
            $chequeos['documentoRecibidoC'] = $fileName2;
            
        }
        $chequeo->update( $chequeos);
        return redirect()->route('chequeos.index')
            ->with('success', 'Chequeo editado correctamente.');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $chequeo = Chequeo::find($id)->delete();

        return redirect()->route('chequeos.index')
            ->with('success', 'Chequeo eliminado correctamente.');
    }
}