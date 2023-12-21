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
    //     $services->fk_category= $data['fk_category'];

    // }
}
