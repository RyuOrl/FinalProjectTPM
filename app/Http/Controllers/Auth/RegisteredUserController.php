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
    public function createStep1(): View
    {
        return view('auth.register_step1');
    }

    public function createStep2(): View
    {
        return view('auth.register_step2');
    }


    /**
     * Handle an incoming registration request.
     *
     * @throws \Illuminate\Validation\ValidationException
     */


    public function storeStep1(Request $request)
    {
        $request->validate([
            'group' => 'unique:groups,group'
        ]);

        $data = $request->only([
            'group',
            'password',
            'confirm_password', 
            'status'
        ]);
    

        $request->session()->put('register1', $data);
        return redirect(route('register.step2'));
    }


    public function storeStep2(Request $request)
    {
        $data1 = $request->session()->get('register1');

        $dataAll = $request->validate([
            'full_name' => ['required', 'string'],
            'email' => ['required', 'email', 'unique:leaders,email'],
            'whatsapp_number' => ['required',
                                'unique:leaders,whatsapp_number',
                                'numeric',
                                'min:9'],
            'line_id' => ['required', 'unique:leaders,line_id'],
            'github_id'=> ['required'],
            'birth_place' => ['required', 'date'],
            'birth_date' => ['required', 'before_or_equal:' . now()->subYears(17)->format('Y-m-d'),],
            'cv_path' => ['required', 'mimes:pdf,jpg,jpeg,png'],
        ]);

        $dataFlazzorID = '';
        if($data1['status']==='binusian'){
            $dataFlazzorID = $request->validate([
                'flazz_card_path' => ['required', 'mimes:pdf,jpg,jpeg,png'],
            ]);
        }elseif($data1['status']==='non-binusian'){
            $dataFlazzorID = $request->validate([
                'id_card_path' => ['required', 'mimes:pdf,jpg,jpeg,png'],
            ]);
        }

        $group = User::create([
            'group' => $data1['group'],
            'password' => Hash::make($data1['password']),
            'status' => $data1['status'],
        ]);

        $leader = Leader::create([
            $dataAll,
            $dataFlazzorID,
            'group_id' => $group->id,
        ]);

        $request->session()->forget('register.step1');

        event(new Registered([$group, $leader]));

        Auth::login($group);

        return redirect('/dashboard');
    }
}
