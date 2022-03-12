<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Camin;

class CaminController extends Controller
{
    public function index()
    {
        $data = Camin::getAllDataCamin();
        //dd($data);
        return view("camin", ["data" => $data]);
    }

    public function show1(){
        $data = Camin::getDataCamin(0);
        //dd($data);
        return view("show", ["camin" => $data]);
    }

    public function show2(){
        $data = Camin::getDataCamin(1);
        //dd($data);
        return view("show", ["camin" => $data]);
    }

    public function show3(){
        $data = Camin::getDataCamin(2);
        //dd($data);
        return view("show", ["camin" => $data]);
    }

    public function show4(){
        $data = Camin::getDataCamin(3);
        //dd($data);
        return view("show", ["camin" => $data]);
    }
}
