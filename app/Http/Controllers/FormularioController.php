<?php

namespace App\Http\Controllers;

use App\Models\Formulario;
use App\Models\Categoria;
use App\Models\Departamento;
use App\Models\Empleado;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\GiraMail;
use Illuminate\Support\Str;
use App\Models\Unidade;
use PDF;
use App\Exports\GiraExport;
use Maatwebsite\Excel\Facades\Excel;
use App\Http\Requests\GiraRequest;
use Illuminate\Support\Facades\Storage;
/**
 * Class FormularioController
 * @package App\Http\Controllers
 */
class FormularioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $formularios = Formulario::paginate(10);
     //   $Roles = Rol::get();
        //get para obtener todo los roles
        return view('formulario.index', compact('formularios'));
     
           // ->with('i', (request()->input('page', 1) - 1) * $formularios->perPage());
    }
    public function generarPDF($id){
        

        $info = Formulario::where('idFormularios',$id)->get();

        $data = [
            'title' => 'Solicitud de Gira',
            'date' => date('m/d/Y'),
            'info' => $info
        ]; 
            
        $pdf = PDF::loadView('formulario.PDF', $data);
     
        return $pdf->download('Solicitud de gira.pdf');
    }
    public function generarPDFTodo(){
        $info = Formulario::get();
        $data = [
            'title' => 'Listado de Giras',
            'date' => date('m/d/Y'),
            'info' => $info
        ];    
        $pdf = PDF::loadView('formulario.PDF2', $data);
        return $pdf->download('Listado de giras.pdf');
    }

    public function generarEXCEL(){
        ob_end_clean();
        ob_start();
        return Excel::download(new GiraExport, 'Gira.xlsx');
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $formulario = new Formulario();
        $categorias = Categoria::pluck('nombre','id');
        $departamento = Departamento::pluck('nombreDepa','idDepartamento');
        $empleados = Empleado::selectRaw('CONCAT(Cedula," ",NombreEmple," ",Apellido1," ",Apellido2) AS Cedula, idEmpleados')->pluck('Cedula','idEmpleados');

        
        return view('formulario.create', compact('formulario','categorias','departamento','empleados'));
    }

    public function vistaEstado($idSolicitud,$token){

        $formulario = Formulario::find($idSolicitud);
       // dd($formulario);
        $vehiculo = Unidade::selectRaw('CONCAT(placa) AS placa, idUnidad')->where('categoria_id', $formulario->categoria_id)->pluck('placa','idUnidad');

        if( $formulario->token == $token){

            return view('formulario.estado', compact('formulario','vehiculo'));

        }else{
            return redirect()->route('formularios.index')
            ->with('success', 'Token es distinto al de la solicitud.');
        }
        
    }

    public function respuestaSolicitud(Request $request, $id){

        $placa = Unidade::find($request->placa);

        $formulario = Formulario::find($id);

        if($request->Estado == 1){
            $formulario['estado'] = $request->Estado;
            $formulario['placa'] = $placa->placa;
            $formulario['token'] = "";
            $formulario->update();
        }
        if($request->Estado == 0){
            $formulario['estado'] = $request->Estado;
            $formulario['token'] = "";
            $formulario->update();
        }
        return redirect()->route('formularios.index')
        ->with('success', 'Formulario editado correctamente');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(GiraRequest $request)
    {
        $token = Str::random(30);
        $url = $request->root();
        request()->validate(Formulario::$rules);
        $formulario  = request()->except('_token');
        if($request->documento != null){
            $fileName = $request->documento->getClientOriginalName();
            $filePath = 'FormularioPDF/' . $fileName;
     
            $path = Storage::disk('public')->put($filePath, file_get_contents($request->documento));
            $path = Storage::disk('public')->url($path);
            $formulario['documento'] = $fileName;
        }
        $formulario['token'] = $token;
        Formulario::insert($formulario);
        $responsable = Empleado::find($request->emple_id);
        $unidad = Categoria::find($request->categoria_id);
        $idFormulario = Formulario::select("idFormularios")->latest()->first();
        $departamento = Departamento::find($request->depar_id);
        $newLink = "$url/estado/$idFormulario->idFormularios/$token";
        $email = "da598298@gmail.com";
        
        $messages = "Solicitud realizada por el departamento  $departamento->nombreDepa, a cargo del director $responsable->NombreEmple $responsable->Apellido1 $responsable->Apellido2 con el numero de cedula $responsable->Cedula, solicito una unidad tipo $unidad->nombre, Objetivo de la gira: $request->Objetivo, personas $request->NumePersonas, fechas de gira $request->FechaSalida 
        hora de salida $request->HoraS, fecha de regreso $request->FechaRegreso, hora de regreso $request->HoraR, destino $request->Lugar, dar respuesta a la solicitud en el siguiente link";
        Mail::to($email)->send(new GiraMail($email,$messages,$newLink));

        return redirect()->route('formularios.index')
            ->with('success', 'Solicitud enviada correctamente.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $formulario = Formulario::find($id);

        return view('formulario.show', compact('formulario'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $formulario = Formulario::find($id);
        $categorias = Categoria::pluck('nombre','id');
        $departamento = Departamento::pluck('nombreDepa','idDepartamento');
        $empleados = Empleado::pluck('Cedula','idEmpleados');
        return view('formulario.edit', compact('formulario','categorias','departamento','empleados'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Formulario $formulario
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Formulario $formulario)
    {
        request()->validate(Formulario::$rules);
        $folderPath = 'FormularioPDF/';
        $formularios  = request()->except('_token');
        if($formulario['documento']){
            unlink($folderPath . $formulario['documento']);
        }

        $fileName = $request->documento->getClientOriginalName();
        $filePath = 'FormularioPDF/' . $fileName;
        $path = Storage::disk('public')->put($filePath, file_get_contents($request->documento));
        $path = Storage::disk('public')->url($path);
        $formularios['documento'] = $fileName;

        $formulario->update($formularios);

        return redirect()->route('formularios.index')
            ->with('success', 'Formulario editado correctamente');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $folderPath = 'FormularioPDF/';
        $formularios = Formulario::find($id);
        if($formularios['documento']){
            unlink($folderPath . $formularios['documento']);
        }
        $formularios->delete();

        return redirect()->route('formularios.index')
            ->with('success', 'Formulario eliminado correctamente');
  
    }
}



