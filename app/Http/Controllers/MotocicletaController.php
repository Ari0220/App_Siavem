<?php

namespace App\Http\Controllers;
use App\Models\Unidade;
use App\Models\Motocicleta;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use PDF;
use App\Exports\MotocicletaExport;
use Maatwebsite\Excel\Facades\Excel;

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
    public function generarPDF(){
        $info = Motocicleta::get();
        $data = [
            'title' => 'Listado de motocicletas',
            'date' => date('m/d/Y'),
            'info' => $info
        ];    
        $pdf = PDF::loadView('motocicleta.PDF', $data);
        return $pdf->download('Listado de motocicleta.pdf');
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
    public function store(Request $request)
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
            ->with('success', 'Inspeccion Motocicleta creado correctamente.');
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
        if($request->documentoEnvio != null){
            unlink($folderPath . $motocicleta['documentoEnvio']);
            $fileName = $request->documentoEnvio->getClientOriginalName();
            $filePath = 'ChequeoPDF/' . $fileName;
            $path = Storage::disk('public')->put($filePath, file_get_contents($request->documentoEnvio));
            $path = Storage::disk('public')->url($path);
            $motocicletas['documentoEnvio'] = $fileName;
        }else{
            $fileName = $motocicletas['documentoEnvio'];
            $motocicletas['documentoEnvio'] = $fileName;
        }
        if($request->documentoRecibido != null){
            unlink($folderPath . $motocicleta['documentoRecibido']);
            $fileName2 = $request->documentoRecibido->getClientOriginalName();
            $filePath2 = 'ChequeoPDF/' . $fileName2;
            $path2 = Storage::disk('public')->put($filePath2, file_get_contents($request->documentoRecibido));
            $path2 = Storage::disk('public')->url($path2);
            $motocicletas['documentoRecibido'] = $fileName2;
        }else{
            $fileName = $motocicletas['documentoRecibido'];
            $motocicletas['documentoRecibido'] = $fileName;
        }
        $motocicleta->update($motocicletas);
        return redirect()->route('motocicletas.index')
            ->with('success', 'Inspeccion Motocicleta editado correctamente.');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $folderPath = 'ChequeoPDF/';
        $motocicleta = Motocicleta::find($id);
        if($motocicleta['documentoEnvio']){
            unlink($folderPath . $motocicleta['documentoEnvio']);
        }
        if($motocicleta['documentoRecibido']){
            unlink($folderPath . $motocicleta['documentoRecibido']);
        }


        $motocicletas = Motocicleta::find($id)->delete();

        return redirect()->route('motocicletas.index')
            ->with('success', 'Inspeccion Motocicleta eliminado correctamente.');
    }
}
