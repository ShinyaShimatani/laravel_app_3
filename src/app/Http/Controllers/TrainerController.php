<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TrainerController extends Controller
{
    public function index(){
        $trainers = Trainer::orderBy('id','asc')->get();
        return view('trainer.index',['trainers' => $trainers]);
    }
}
