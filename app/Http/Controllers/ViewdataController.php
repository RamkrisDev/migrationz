<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\bestone;

class ViewdataController extends Controller
{
    //
    public function index()
    {
        # code...
        $data=bestone::paginate(5);
        return view('viewdata',['datas'=>$data]);
    }
}
