<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\profile;
use App\servicecenter;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class ProfileController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:web');
    }

    public function index(){
        $user =Auth::user();
        $id = 0;
        $pic =  profile::where('id',$user->id)->first();
        if(is_null($pic)){
            $pic = profile::where('id',$id)->first();
        }
        $service = servicecenter::where('id',$user->id)->first();
        return view('profile',compact('user','service','pic'));
    }
}
