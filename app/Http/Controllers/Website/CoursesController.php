<?php

namespace App\Http\Controllers\website;

use App\Models\category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\course;
use App\Models\teacher;

class CoursesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $Category = category::with("course")->get();
        return view("website.courses",compact("Category"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
         $Category =category::with("course")->where("id",$id)->get();
        return view("website.onecourses",compact("Category"));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $Course=course::with("teacher")->where("id",$id)->get();
        return view("website.onedetails",compact("Course"));
    }
    public function teachershow(string $courseId ,string $teacherID )
    {
        $Course=course::where("id",$courseId)->get();
        $Teacher=teacher::where("id",$teacherID)->get();
        return view("website.coursedetails",compact("Course","Teacher"));


    }

    /** 
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
