<?php

namespace App\Http\Controllers;
use App\Http\Resources\CategoryResource;
use App\Models\Categories;
use Illuminate\Http\Request;

class CategoriesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     *
     */
    public function index()
    {
//        $Category = Categories::where('featured', false)->get();
        return CategoryResource::collection(Categories::all());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $request->validate([
            'title' => 'required',
            'image_name' => 'required|file|im age'
        ]);

        $categories = Categories::create($request->all());

        if($request->hasFile('image_name') && $request->file('image_name')->isValid()){
            $categories->addMediaFromRequest('image_name')->toMediaCollection('Category');
        }

        return $categories;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return Categories::find($id);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $categorie = Categories::find($id);
        $categorie->update($request->all());
        return $categorie;

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        return Categories::destroy($id);
    }

     /**
     * Search for a name
     *
     * @param  str  $name
     * @return \Illuminate\Http\Response
     */
    public function search($name)
    {
        return Categories::where('title','like', '%'.$name.'%')->get();
    }
}
