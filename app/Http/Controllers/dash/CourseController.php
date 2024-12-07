<?php

namespace App\Http\Controllers\dash;

use App\Models\course;
use App\Models\category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\CourseRequest;

class CourseController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $course=course::get();
        $Category=category::get();
        return view("dashbord.courses.view",compact("course","Category"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $Category= category::get();
        return view("dashbord.courses.create",compact("Category"));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(CourseRequest $request)
    {
        if ($request->hasFile("img")) {
            $Images = $request->only("img");
            $data = $request->except("img");

            // تعيين category_id إلى 1 بشكل افتراضي إذا كانت غير موجودة في البيانات


            // حفظ الصور
            $nameImages = course::saveImage($Images);

            // إنشاء الدورة التدريبية
            course::create([
                'name' => $data["name"],
                'price' => $data["price"],
                'sale' => $data["sale"],
                'count' => $data["count"],
                'duration' => $data["duration"],
                'category_id' =>  $data['category_id'],  // التأكد من أن القيمة التي تم تمريرها صحيحة
                'img' => $nameImages
            ]);

            return to_route("course.index");
        }
    }


    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $course=  course::findOrfail($id);
      $Category=category::get();
      return view("dashbord.courses.update",compact("course","Category"));
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
        if($request->hasFile("img")){
            $data=$request->except("img","_token","_method");
            $images=$request->only("img");
            course::DeleteImage($id);
           $nameimages=  course::saveImage($images);
            $nameimages;
            course::where("id",$id)->update([
                'name' => $data["name"] ,
                'price' => $data["price"] ,
                'sale' =>  $data["sale"],
                'count' => $data["count"],
                'duration' => $data["duration"] ,
                'category_id' => $data["category_id"] ,
                'img' =>$nameimages
            ]);
            return to_route("course.index");
        }
        else{
            $data=$request->except("img","_token","_method");
            course::where("id",$id)->update($data);
            return to_route("course.index");

        }

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        course::DeleteImage($id);
        course::where("id",$id)->delete();
        return to_route("course.index");
    }
}
