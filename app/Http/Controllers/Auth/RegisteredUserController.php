<?php

namespace App\Http\Controllers\Auth;

use App\Models\User;
use Illuminate\View\View;
use Illuminate\Http\Request;
use Illuminate\Validation\Rules;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Models\Leader;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\RedirectResponse;
use Illuminate\Auth\Events\Registered;
use App\Providers\RouteServiceProvider;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     */
    public function create(): View
    {
        return view('auth.register');
    }

    public function store(Request $request)
    {
        $request->validate([
            'group' => 'unique:groups,group',
            'email' => 'unique:leaders,email',
            'whatsapp_number' => 'unique:leaders,whatsapp_number',
            'line_id' => 'unique:leaders,line_id',

        ]);

        $group = User::create([
            'group' => $request->group,
            'password' => Hash::make($request->password),
            'status' => $request->status,
        ]);
        
            $leader = Leader::create([
                'full_name' => $request->full_name,
                'email' => $request->email,
                'whatsapp_number' => $request->whatsapp_number,
                'line_id' => $request->line_id,
                'github_id'=> $request->github_id,
                'birth_place' => $request->birth_place,
                'birth_date' => $request->birth_date,
                'cv_path' => $request->cv_path, //bisa flazz bisa id
                'card_path' => $request->card_path,
                'group_id' => $group->id,
            ]);
        

        event(new Registered([$group, $leader]));

        Auth::login($group);

        return redirect('/user/dashboard');
    }
}

