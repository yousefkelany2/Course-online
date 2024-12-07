<?php

namespace App\Http\Controllers\Website;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Cart;
use App\Models\course;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class MycourseController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        if(Auth::check()){
            $user_id = Auth::user()->id;
            $User = User::where("id",$user_id)->with("course")->get();
            return view("website.mycourse",compact("User"));

        }
        else {
            return to_route("Login.index");
        }

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

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        if(Auth::check()){
            $user_id = Auth::user()->id;
            $course_id = $id;
            $exists = Cart::where('user_id', $user_id)
              ->where('course_id', $course_id)
              ->exists();

              if (!$exists) {
                Cart::create([
                    "user_id" => $user_id,
                    "course_id" => $course_id
                ]);
                $Course= course::where("id",$course_id)->get();
                 return view("website.content",compact("Course"));
            }else {
                $Course= course::where("id",$course_id)->get();
                return view("website.content",compact("Course"));
            }

        }
        else {
            return to_route("Login.index");
        }
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
