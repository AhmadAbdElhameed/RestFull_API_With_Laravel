<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Projects;

class ProjectController extends Controller
{
    //
    public function ProjectView(){
        $result = Projects::all();
        return $result;
    }

    public function LastThreeProjects(){
        $result = Projects::limit(3)->get();
        return $result;
    }
    public function ProjectDetails($project_id){
        $id = $project_id;
        $result = Projects::where('id',$id)->get();
        return $result;
    }


}
