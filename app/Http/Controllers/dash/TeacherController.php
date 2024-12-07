<?php

namespace App\Http\Controllers\dash;

use App\Models\course;
use App\Models\teacher;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\TeacherRequest;
use App\Models\teacher_course;

class TeacherController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $teacher=teacher::with("Tcourse")->get();
        return view("dashbord.teacher.view",compact("teacher"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $Tcourse= course::get(["id","name"]);
        return view("dashbord.teacher.create",compact("Tcourse"));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(TeacherRequest $request)
    {
        teacher::create($request->toArray());
        $teacher_id= teacher::where("email",$request->email)->get("id");
        foreach ($request->courses as $course){
         foreach($teacher_id as $teacher){

           teacher_course::create([
               "teacher_id"=>$teacher["id"],
               "course_id"=>$course
           ]);

         }
       }
        return to_route("teacher.index");
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $Tcourse=course::get(["id","name"]);
        $teacher= teacher::with("Tcourse")->findOrfail($id);
        return view("dashbord.teacher.update",compact("teacher","Tcourse"));
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
        $teacher=$request->except("_token","_method","courses");
        $teacher_course=$request->only("courses");
        teacher_course::where("teacher_id",$id)->get();
        teacher::where("id",$id)->update($teacher);
        teacher_course::where("teacher_id",$id)->delete();
        foreach($teacher_course["courses"] as $course){

            teacher_course::create([
                "teacher_id"=>$id,
                "course_id"=>$course
            ]);
        }




        return to_route("teacher.index");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        teacher::findOrfail($id)->delete();
        return to_route("teacher.index");
    }
}
