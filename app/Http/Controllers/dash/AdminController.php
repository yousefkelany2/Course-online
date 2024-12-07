<?php

namespace App\Http\Controllers\dash;

use App\Http\Controllers\Controller;
use App\Http\Requests\AdminRequest;
use App\Models\Admin;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $Admin =Admin::get();
        return view("dashbord.admin.view",compact("Admin"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("dashbord.admin.add");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(AdminRequest $request)
    {


        Admin::create($request->toArray());
        return to_route("admin.index");
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $admin=Admin::findOrfail($id);
        return view("dashbord.admin.update",compact("admin"));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $data=$request->except("_token","_method");
        Admin::where("id",$id)->update($data);
        return to_route("admin.index");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Admin::where("id",$id)->delete();
        return to_route("admin.index");
    }
}
