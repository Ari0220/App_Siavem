<?php

namespace App\Http\Controllers;

use App\Models\Tallere;
use App\Models\Preventivo;
use App\Models\Correctivo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use PDF;
use App\Exports\TallerExport;
use Maatwebsite\Excel\Facades\Excel;
/**
 * Class TallereController
 * @package App\Http\Controllers
 */
class TallereController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $talleres = Tallere::paginate(3);

        return view('tallere.index', compact('talleres'))
            ->with('i', (request()->input('page', 1) - 1) * $talleres->perPage());
    }

    public function generarPDF(){
        $info = Tallere::get();
        $data = [
            'title' => 'Listado de Talleres',
            'date' => date('m/d/Y'),
            'info' => $info
        ];    
        $pdf = PDF::loadView('tallere.PDF', $data);
        return $pdf->download('Listado de talleres.pdf');
    }
    public function generarEXCEL(){
        ob_end_clean();
        ob_start();
        return Excel::download(new TallerExport, 'tallere.xlsx');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $tallere = new Tallere();
        return view('tallere.create', compact('tallere'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Tallere::$rules);
        $taller  = request()->except('_token');
        $fileName = $request->documento->getClientOriginalName();
        $filePath = 'TallerPDF/' . $fileName;
 
        $path = Storage::disk('public')->put($filePath, file_get_contents($request->documento));
        $path = Storage::disk('public')->url($path);
        $taller['documento'] = $fileName;
        Tallere::insert($taller);
        return redirect()->route('talleres.index')
            ->with('success', 'Taller crear correctamente.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $tallere = Tallere::find($id);

        return view('tallere.show', compact('tallere'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $tallere = Tallere::find($id);

        return view('tallere.edit', compact('tallere'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Tallere $tallere
     * @return \Illuminate\Http\Response
     */
   /* public function update(Request $request, Tallere $tallere)
    {
        $folderPath = 'TallerPDF/';
        request()->validate(Tallere::$rules);
        $taller  = request()->except('_token');
        $taller = Tallere::find($request->id);

        if($request->documento != null){
            unlink($folderPath . $tallere['documento']);
            $fileName = $request->documento->getClientOriginalName();
            $filePath = 'TallerPDF/' . $fileName;
            $path = Storage::disk('public')->put($filePath, file_get_contents($request->documento));
            $path = Storage::disk('public')->url($path);
            $taller['documento'] = $fileName;
        }else{
            $fileName = $tallere['documento'];
            $taller['documento'] = $fileName;
        }
        $tallere->update($taller);

        return redirect()->route('talleres.index')
            ->with('success', 'Taller editado correctamente');
    }*/
     
    public function update(Request $request, Tallere $tallere)
{
    $folderPath = 'TallerPDF/';
    request()->validate(Tallere::$rules);
    $taller = request()->except('_token');

    if ($request->hasFile('documento')) {
        $existingDocument = $tallere->documento;

        if (!empty($existingDocument)) {
            unlink($folderPath . $existingDocument);
        }

        $fileName = $request->documento->getClientOriginalName();
        $filePath = 'TallerPDF/' . $fileName;
        $path = Storage::disk('public')->put($filePath, file_get_contents($request->documento));
        $path = Storage::disk('public')->url($path);
        $taller['documento'] = $fileName;
    } else {
        $taller['documento'] = $tallere->documento;
    }

    $tallere->update($taller);

    return redirect()->route('talleres.index')
        ->with('success', 'Taller editado correctamente');
}

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $preventivo = Preventivo::where('taller_id',$id)->get();
        $correctivo = Correctivo::where('taller_id',$id)->get();

        if($preventivo->isEmpty() && $correctivo->isEmpty() ){

        $folderPath = 'TallerPDF/';
        $taller = Tallere::find($id);
        if($taller['documento']){
            unlink($folderPath . $taller['documento']);
        }
        $tallere = Tallere::find($id)->delete();

        return redirect()->route('talleres.index')
            ->with('success', 'Taller eliminar correctamente');
    }else {
        return redirect()->route('talleres.index')
        ->with('success', 'Taller se encuentra en un Mantenimiento');
    }
}
}
