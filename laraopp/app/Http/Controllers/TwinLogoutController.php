<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TwinLogoutController extends Controller
{
    function logout(){
        session()->forget("twin_auth");
		return redirect("/login");
	}
}
