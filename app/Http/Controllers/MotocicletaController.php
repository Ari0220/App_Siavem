<?php

namespace App\Http\Controllers;
use App\Models\Unidade;
use App\Models\Motocicleta;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use PDF;
use App\Exports\MotocicletaExport;
use Maatwebsite\Excel\Facades\Excel;
use App\Http\Requests\FechaMotocicletaRequest;

/**
 * Class MotocicletaController
 * @package App\Http\Controllers
 */
class MotocicletaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $motocicletas = Motocicleta::paginate();

        return view('motocicleta.index', compact('motocicletas'))
            ->with('i', (request()->input('page', 1) - 1) * $motocicletas->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $motocicleta = new Motocicleta();
        $unidade = Unidade::pluck('placa','idUnidad');
        return view('motocicleta.create', compact('motocicleta','unidade'));
    }
    public function generarPDFMoto($id){
        

        $info = Motocicleta::where('idMotocicleta',$id)->get();

        $data = [
            'title' => 'Inspección  de Motocicleta',
            'date' => date('m/d/Y'),
            'info' => $info
        ]; 
            
        $pdf3 = PDF::loadView('motocicleta.PDF2', $data);
     
        return $pdf3->download('Inspección  Motocicleta.pdf');
    }
    public function generarPDF(){
        $info = Motocicleta::get();
        $data = [
            'title' => 'Listado de Inspección  motocicleta',
            'date' => date('m/d/Y'),
            'info' => $info
        ];    
        $pdf = PDF::loadView('motocicleta.PDF', $data);
        return $pdf->download('Listado de Inspección  motocicleta.pdf');
    }
    public function generarEXCEL(){
        ob_end_clean();
        ob_start();
        return Excel::download(new MotocicletaExport, 'motocicleta.xlsx');
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, FechaMotocicletaRequest $re)
    {
        request()->validate(Motocicleta::$rules);

        $motocicleta  = request()->except('_token');
        if($request->documentoEnvio){
            $fileName = $request->documentoEnvio->getClientOriginalName();
            $filePath = 'ChequeoPDF/' . $fileName;
            $path = Storage::disk('public')->put($filePath, file_get_contents($request->documentoEnvio));
            $path = Storage::disk('public')->url($path);
            $motocicleta['documentoEnvio'] = $fileName;
        }
        if($request->documentoRecibido){
            $fileName2 = $request->documentoRecibido->getClientOriginalName();
            $filePath2 = 'ChequeoPDF/' . $fileName2;
            $path = Storage::disk('public')->put($filePath2, file_get_contents($request->documentoRecibido));
            $path = Storage::disk('public')->url($path);
            $motocicleta['documentoRecibido'] = $fileName2;
            
        }
        Motocicleta::insert($motocicleta);


        return redirect()->route('motocicletas.index')
            ->with('success', ' Inspección  motocicleta creado correctamente.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $motocicleta = Motocicleta::find($id);

        return view('motocicleta.show', compact('motocicleta'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $motocicleta = Motocicleta::find($id);
        $unidade = Unidade::pluck('placa','idUnidad');
        return view('motocicleta.edit', compact('motocicleta','unidade'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Motocicleta $motocicleta
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Motocicleta $motocicleta)
    {
        request()->validate(Motocicleta::$rules);

        $motocicletas  = request()->except('_token');
        $folderPath = 'ChequeoPDF/';
        
        if($motocicleta['documentoEnvio']){
            unlink($folderPath . $motocicleta['documentoEnvio']);
        }
        if($motocicleta['documentoRecibido']){
            unlink($folderPath . $motocicleta['documentoRecibido']);
        }

        if($request->documentoEnvio){
            $fileName = $request->documentoEnvio->getClientOriginalName();
            $filePath = 'ChequeoPDF/' . $fileName;
            $path = Storage::disk('public')->put($filePath, file_get_contents($request->documentoEnvio));
            $path = Storage::disk('public')->url($path);
            $motocicletas['documentoEnvio'] = $fileName;
        }
        if($request->documentoRecibido){
            $fileName2 = $request->documentoRecibido->getClientOriginalName();
            $filePath2 = 'ChequeoPDF/' . $fileName2;
            $path = Storage::disk('public')->put($filePath2, file_get_contents($request->documentoRecibido));
            $path = Storage::disk('public')->url($path);
            $motocicletas['documentoRecibido'] = $fileName2;
            
        }

        $motocicleta->update($motocicletas);
        return redirect()->route('motocicletas.index')
            ->with('success', 'Inspección Motocicleta editado correctamente');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
      //  $folderPath = 'ChequeoPDF/';
        //$motocicleta = Motocicleta::find($id);
        //if($motocicleta['documentoEnvio']){
          //  unlink($folderPath . $motocicleta['documentoEnvio']);
        //}
        /*if($motocicleta['documentoRecibido']){
            unlink($folderPath . $motocicleta['documentoRecibido']);
        }


        $motocicletas = Motocicleta::find($id)->delete();

        return redirect()->route('motocicletas.index')
            ->with('success', 'Inspeccion Motocicleta eliminado correctamente.');*/
            $motocicletas = Motocicleta::find($id)->delete();

            return redirect()->route('motocicletas.index')
            ->with('success', 'Inspección Motocicleta eliminado correctamente.');
    }
}