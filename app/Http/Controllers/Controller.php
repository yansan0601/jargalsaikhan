<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use DB;

class Controller extends BaseController
{
    public function get_chat_message(Request $req){

    }

    public function Hello($name){
        
    }
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
}
