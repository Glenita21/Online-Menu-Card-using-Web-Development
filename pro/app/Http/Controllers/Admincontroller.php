<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// use Session;
use Illuminate\Support\Facades\Session;
use App\admin;

class AdminController extends Controller
{
    public function adminlogin(Request $req)
    {
    	$uname = $req->input('uname');
    	$pass = $req->input('pass');

    	$login = admin::where('aname','=',$uname)
    					->where('password','=',$pass)
    					->get();
    	if(count($login)>0)
    	{
    		$admin = admin::where('aname','=',$uname)
    					->where('password','=',$pass)
    					->value('aname');
    					Session::put('admin',$admin);
    		return redirect('/admindashboard');
    	}	
    	else{
    		echo "
    		<script>
    		alert('Invalid Username or Password!');
    		window.location='/FoodAdmin';
    		</script>
    		";
    	}			
    }

    public function alogout()
    {
    	Session::forget('admin');
    	Session::flush();
    	return redirect('/FoodAdmin');
    }
}
