<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function search()
	{
		$users = DB::table('users')->select('name')->where('fee_status', '=', '1')->get();
		
		return view("/searchroommates", compact('users'));
	}

}
