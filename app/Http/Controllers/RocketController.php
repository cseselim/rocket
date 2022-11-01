<?php

namespace App\Http\Controllers;

use App\Http\Requests\rocketRequest;
use App\Models\RocketModel;
use App\Repository\RocketRepository;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class RocketController extends Controller
{
    public $rocket;

    public function __constructor(RocketRepository $rocketRepository){
        $this->rocket = $rocketRepository;
    }
    public function index(){
       return view('rocket_form_create');
    }

    public function create(){
        return view('rocket_form_create');
    }

    public function store(rocketRequest $request){


        $u = $request->initial_spreed;
        $a = (int)$request->acceleration;
        $v = (float)$request->last_spreed * 1000;
        $t = (($v/$a)-$u);
        echo $t;exit();
        $u = $request->initial_spreed;

//        RocketModel::insert($request->validated());
//        return Redirect::route('create.rocket');
    }
}
