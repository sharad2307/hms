<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use App\Add_rooms;

class AdminController extends Controller
{
	public function __construct()
	{
		$this->middleware('auth');
	}
	
	public function verify_results()
	{
		$users = DB::table('users')->select('name','id' , 'roll_number' ,'admission_number', 'result_status')->where([
			['book_room', '=', '1'],
				
		])->get();
		
		return view("/verifyresults", compact('users'));
	}

	public function verify_fees()
	{
		$users = DB::table('users')->select('name' ,'id', 'utr_number' ,'admission_number', 'fee_status')->where([
			['result_status', '=', '1'],
			
		])->get();
		
		return view("/verifyfees", compact('users'));
	}

	public function update_result_status(User $user)
	{

		
		if($user->result_status == '1')
		{
			$user->result_status='0';
		}
		else
			$user->result_status='1';
        	$user->save();
        return redirect('/verifyresults');
	}
	public function update_fee_status(User $user)
	{

		
		if($user->fee_status == '1')
		{
			$user->fee_status='0';
		}
		else
			$user->fee_status='1';
        	$user->save();
        return redirect('/verifyfees');
	}

	// public function addrooms(Add_rooms $add_rooms)
	// {
	// 	return Add_rooms::create([
 //            'hostel' => $add_rooms['hostel'],
 //            'category' => $add_rooms['category'],
 //            'to' => $add_rooms['to'],
 //            'from' =>  $add_rooms['from'],
 //            'year' =>  $add_rooms['year'],
            
		

		
 //        	]);
 //        return redirect('/addrooms);
	// }

	

}
