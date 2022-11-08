<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
class GenshinCharacterController extends Controller
{
    public function index(){
        $users = DB::table('registeruser')
        ->get();
        return view('profile',compact('users'));
    }
}
