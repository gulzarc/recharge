<?php

namespace App\Http\Controllers\admin\slabs;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SlabController extends Controller
{
    public function newSlab(){
    	return view('admin.slabs.addslab');
    }
}
