<?php

namespace App\Http\Controllers;

use App\Models\Service;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $category = Category::all();
        return view('/category/CategoryShow', compact('category'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        $category = Category::all();
        return view('/category/CategoryCreate')->with(['category' => $category]);;
    
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $data = request()->validate([

            'name_category' => 'required',

        ]);

        //Insertar la informacion
        Category::create($data);

        //Redireccionar
        return redirect('/category/show');

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
    public function edit($id_category)
    {
        //
        $category = Category::find($id_category);
        return view('/category/CategoryUpdate')->with(['category' => $category]);

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Category $categories)
    {
        //
        $data = request()->validate([
            'name_category' => 'required',
        ]);
        $categories->name_category= $data['name_category'];
        $categories->updated_at = now();

        $categories->save();
        return redirect('/category/show');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        Category::destroy($id);

        //Retornar una respuesta json
        return response()->json(array('res' => true));
    }

}
