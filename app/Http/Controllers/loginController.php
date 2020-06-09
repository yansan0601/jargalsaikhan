<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http\Request;
use DB;

class loginController extends BaseController
{
    public function login(Request $req)
    {
        $username = $req->input('username');
        $password = $req->input('password');
        
        $CheckLogin = DB::table('admin')->where(['username'=>$username, 'password'=>$password])->get();
        if(count($CheckLogin) >0)
        {
            echo "Тавтай морил";

            print_r($req->input());
        }
        else
        {
            echo "Login failed wrong Data Passed";
        }
    }
}



?>
