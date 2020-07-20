<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\admin;

class homecontroller extends Controller
{
    public function adddqry(Request $req)
    {
        $stu=new admin();
        $stu->aname=$req->input('name');
        $stu->password=$req->input('password');
        if($stu->save())
        {
            echo "
            <script>
            alert('inserted');
            window.location='home';
            </script>
            ";
        }
    }
}
