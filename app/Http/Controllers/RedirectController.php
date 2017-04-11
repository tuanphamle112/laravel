<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RedirectController extends Controller
{
    function test_redirectC(){
    	return redirect()->route('testing');
    }
}
