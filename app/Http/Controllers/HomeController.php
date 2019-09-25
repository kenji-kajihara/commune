<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Profile;
use Illuminate\Support\Facades\Auth;
use Storage;

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
        $user = Auth::user();
        
        $profile = $user->profile;
        
        if($profile == null){
            return redirect('commune/profile/create');
        }
        return view('home');
    }
}
