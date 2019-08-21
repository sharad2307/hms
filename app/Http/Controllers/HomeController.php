<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('/home');
    }
    public function update_book_room(user $user)
    {

        $user->book_room = '1';
        $user->save();
        return redirect('/home');
    }
    public function update_utr(user $user)
   { // { dd('hello');

        $user->utr_number = request('utr_number');
        $user->save();
        return redirect('/home');
        
    
    }

}
