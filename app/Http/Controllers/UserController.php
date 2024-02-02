<?php

namespace App\Http\Controllers;

use App\Models\Leader;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function read(){
        $user = Leader::where('group_id', auth()->user()->id)->first();
        return view('dashboard', compact('user'));
    }
}
