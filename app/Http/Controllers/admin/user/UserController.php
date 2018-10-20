<?php

namespace App\Http\Controllers\admin\user;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UserController extends Controller
{
    public function registration(Request $request){
    	return view('admin.users.registration');
    }
    public function userSearch(Request $request){
    	return view('admin.users.search');
    }

    public function userManage(Request $request){
    	return view('admin.users.manageuser');
    }
}
