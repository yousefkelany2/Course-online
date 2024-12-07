<?php

namespace App\Http\Controllers\dash;

use App\Models\category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\CategoryRequest;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $Category=category::get();
        return view("dashbord.category.view",compact("Category"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("dashbord.category.add");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(CategoryRequest $request)
    {
        category::create($request->toArray());
        return to_route("category.index");

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $category=  category::findOrfail($id);
        return view("dashbord.category.update",compact("category"));

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $data=$request->except("_token","_method");
       category::where("id",$id)->update($data);
        return to_route("category.index");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        category::where("id",$id)->delete();
        return to_route("category.index");
    }
}
