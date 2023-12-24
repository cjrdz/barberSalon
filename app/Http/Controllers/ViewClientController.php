<?php

namespace App\Http\Controllers;

use App\Models\Service;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ViewClientController extends Controller
{
    //
    public function viewClient(){

        $category = Category::all();
        return view('/category/ClientCategoryShow')->with(['category'=>$category]);;

    }
// Mostrar servicios por categoría
    public function search($id_category){
        $category = Category::find($id_category);

        $service = Service::where('fk_category', $id_category)->get();
      
        return view('/category/ClientServiceShow')->with(['service' => $service, 'category' => $category]);
    }

    
    // public function searchshow(Request $request, Service $services){

    //     $data = request()->validate([
    //         'name_service' => 'required',
    //         'timeframe' => 'required',
    //         'precio' => 'required',
    //         'fk_category' => 'required',
    //     ]);
    //     // reemplazar datos
    //     $services->name_service= $data['name_service'];
    //     $services->timeframe= $data['timeframe'];
    //     $services->precio= $data['precio'];
    //     $services->fk_category=g $data['fk_category'];

    // }
    public function index()
    {
        // return view for service show
        $service = Service::select(

            "service.id_service",
            "service.name_service",
            "service.timeframe",
            "service.img",
            "service.description",
            "service.precio",
            "service.fk_category",

            "category.id_category", // category 
            "category.name_category as category", //category - name category
            
        )->join("category", "category.id_category", "=", "service.fk_category")
        ->get();

        return view('/service/ServiceShowAll')->with(['service' => $service]);
    }
}
