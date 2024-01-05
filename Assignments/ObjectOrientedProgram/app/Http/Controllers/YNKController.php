<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class YNKController extends Controller
{
    //

    function info($id=null)
    {
        return "Welcome".$id;
    }
}
