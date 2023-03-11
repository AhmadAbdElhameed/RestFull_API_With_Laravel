<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Team;


class TeamController extends Controller
{
    //
    public function teamView(){
        $result = Team::all();
        return $result;
    }
}
