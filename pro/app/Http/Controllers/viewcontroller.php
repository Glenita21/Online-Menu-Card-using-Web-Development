<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\work;
use DB;
use App\Http\controllers\controller;

class viewcontroller extends Controller
{
    public function index()
    {
    	$users=DB::SELECT('select * from  work');
    	return view('view',['users'=>$users]);
    }
}
