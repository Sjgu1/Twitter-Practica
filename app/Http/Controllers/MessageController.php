<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MessageController extends Controller
{
    public function index(){
        $id = Auth::id();
        $user = User::find($id);
        $convers=$user->conversaciones();
        return view('layouts.app', ['convers' => $convers]);
    }
}
