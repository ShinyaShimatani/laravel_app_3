<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Mail\Test;
use Illuminate\Support\Facades\Mail;
use App\Member;

class MailController extends Controller
{
    public function index()
    {
       $members = Member::get();
       Mail::to($members)->send(new Test('臨時休業のお知らせです!'));

    }