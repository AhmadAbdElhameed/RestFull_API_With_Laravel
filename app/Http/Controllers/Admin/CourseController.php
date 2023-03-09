<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Courses;

class CourseController extends Controller
{
    //

    public function allCourses(){
        $result = Courses::all();
        return $result;
    }
    public function LastFourCourses(){
        $result = Courses::limit(4)->get();
        return $result;
    }
    public function courseDetails($course_id){
        $id = $course_id;
        $result = Courses::where('id',$id)->get();
        return $result;
    }
}
