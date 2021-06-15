<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use DB;

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
    { //dd(Auth::user());
        return view('deshbord');
    }

    public function logout1(){
      $user_id = Auth::user()->id;
      Auth::logout();
      //session::flush();
      DB::table('users')->where('id', $user_id)->update(['remember_token' => Null]);
      return redirect('/login1');
    }
}
