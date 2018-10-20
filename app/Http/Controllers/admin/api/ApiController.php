<?php

namespace App\Http\Controllers\admin\api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ApiController extends Controller
{
   	public function addApi(){
   		return view('admin.api.add_api');
   	}
   	public function apiSwitch(){
   		return view('admin.api.apiswitch');
   	}
}
