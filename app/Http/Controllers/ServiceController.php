<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Service;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // return view for service show
        // return view('service.show');
        $service = Service::select(

            "service.id_service",
            "service.name_service",
            "service.timeframe",
            "service.fk_category",

            "category.id_category", // category 
            "category.name_category as category", //category - name category
            
        )->join("category", "category.id_category", "=", "service.fk_category")
        ->get();

        return view('/service/ServiceShow')->with(['service' => $service]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        // show viwe to create new service
        $category = Category::all();
        $service = Service::all();
        // $tarea = TareaModel::all();
        return view('/Service/ServiceCreate')
        ->with(['service' => $service])
        ->with(['category' => $category]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
         //Almacenar info de cliente
         $data = request()->validate([
            'name_service'=> 'required',
            'timeframe' => 'required',
            'fk_category' => 'required'
        ]);//validacion

        //guardar info

        Service::create($data);

        //Redireccionar
        return redirect('/service/show');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id_service)
    {
        //
        $service = Service::select(
            "service.id_service",
            "service.name_service",
            "service.timeframe",
            "service.fk_category",
    
            "category.id_category",
            "category.name_category as category"
        )
        ->join("category", "category.id_category", "=", "service.fk_category")
        ->find($id_service);

        $category = Category::all();
      
        return view('/service/ServiceUpdate')->with(['service' =>  $service, 'category'=>$category]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Service $services)
    {
        //validar info
        $data = request()->validate([
            'name_service' => 'required',
            'timeframe' => 'required',
            'fk_category' => 'required',
        ]);
        // reemplazar datos
        $services->name_service= $data['name_service'];
        $services->timeframe= $data['timeframe'];
        $services->fk_category= $data['fk_category'];

        $services->updated_at = now();

        $services->save();
        return redirect('/service/show');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        Service::destroy($id);

        //Retornar una respuesta json
        return response()->json(array('res' => true));
    }
}
