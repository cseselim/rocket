<?php

namespace App\Http\Controllers;

use App\Http\Requests\rocketRequest;
use App\Models\RocketModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class RocketController extends Controller
{
    public function index(){
       return view('rocket_form_create');
    }

    public function create(){
        return view('rocket_form_create');
    }

    public function store(rocketRequest $request){
//        dd($request->validated());
        RocketModel::insert($request->validated());
        return Redirect::route('create.rocket');
    }
}
