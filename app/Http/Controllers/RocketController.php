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
        $data = RocketModel::get();
        return view('rocket_lunch_list',compact('data'));
    }

    public function create(){
        return view('rocket_form_create');
    }

    public function store(rocketRequest $request){

        $u = $request->initial_spreed;
        $a = $request->acceleration;
        $v = $request->last_spreed * 1000;
        $linear_spreed_at_empty_space = $request->linear_spreed_at_empty_space * 1000;
        $earth_to_space = $request->earth_to_space;
        $space_to_earth = $request->space_to_earth;
        $t1 = $earth_to_space*1000/$linear_spreed_at_empty_space;
        $t2 = (($v/$a)-$u);
        $goingTime = $t1+$t2;


        $rocketLaunch = $request->rocket_launch_datetime;
        $rocketBackTime = date('Y-m-d H:i:s', strtotime($rocketLaunch . ' + 6 hours'));

        $bu = $linear_spreed_at_empty_space;
        $bs = ($space_to_earth - $earth_to_space)*1000;
        $ba = (1/2)*9.81;
        $lob = $ba*2;
        $bv = 0;
        $discriminant = $bu * $bu - 4 * $ba*(-$bs);
        if($discriminant > -1){
            $sqRoot =  - $bu + sqrt($discriminant);
            $backTime = $sqRoot/$lob;
        }else{
            $backTime = "discriminant is not valid";
        }

        $data = $request->validated();
        $data['rocket_back_datetime'] = $rocketBackTime;
        $data['earth_to_space'] = $earth_to_space;
        $data['space_to_earth'] = $space_to_earth;
        $data['earth_to_space_reach_time'] = $goingTime;
        $data['space_earth_to_back_time'] = $backTime;
        RocketModel::insert($data);
        return Redirect::route('rocket.lunch.list');
    }
}
