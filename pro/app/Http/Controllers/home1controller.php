<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\work;
class home1controller extends Controller
{
     public function addqry(Request $req)
    {
        $food = $req->input('name');
        $sql = work::where('dname','=',$food)->get();
        if(count($sql)>0)
        {
            echo "
            <script>
            alert('Already Present');
            window.location='/addfood';
            </script>
            ";
        }
        else
        {
            $stu=new work();
            $stu->dname=$req->input('name');
            $stu->price=$req->input('price');
            if($stu->save())
            {
                echo "
                <script>
                alert('inserted');
                window.location='/addfood';
                </script>
                ";
            }
        }
    }
     public function edit($id)
    {
        $res=work::where('id','=',$id)->get();
        return view('edit',compact('res'));
    }
    public function editqry(Request $req)
    {
        $id=$req->input('id');
        $n=$req->input('name');
        $r=$req->input('price');
        $update = work::where('id','=',$id)->update(['dname'=>$n,'price'=>$r]);
        if($update == true)
        {
            echo "
            <script>
            alert('updated');
            window.location='/viewfood';
            </script>
            ";
        }
        else
        {
            echo "
            <script>
            alert('error');
            window.location='/viewfood';
            </script>
            ";
        }

    }
     public function delete($id)

    {
        $delete=work::where('id','=',$id)->delete();
        if($delete == true)
        {
            echo "
            <script>
            alert('deleted');
            window.location='/viewfood';
            </script>
            ";
        }
        else
        {
            echo "
            <script>
            alert('error');
            window.location='/viewfood';
            </script>
            ";
        }

    }
  
}
