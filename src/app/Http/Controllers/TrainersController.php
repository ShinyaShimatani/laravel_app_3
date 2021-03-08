<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Trainer;

class TrainersController extends Controller
{
    public function index(){
        $trainers = Trainer::orderBy('id','asc')->get();
        return view('trainer.index',['trainers' => $trainers]);
    }
}
