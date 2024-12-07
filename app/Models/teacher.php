<?php

namespace App\Models;

use App\Models\course;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class teacher extends Model
{
    use HasFactory;
    protected $fillable =[
        "name"
        ,"email"
        ,"phone"
        ,"address"
        ,"age"
        ,"gender"

    ];

/*     public function setCoursesAttribute($per)
    {
        return $this->attributes["courses"]=implode('+',$per);
    }  */
    /* public function getCoursesAttribute($per)
    {
        return explode('+',$per);
    }  */
    public function Tcourse()
    {
        return $this->belongsToMany(course::class,"teacher_courses") ;
    }
}
