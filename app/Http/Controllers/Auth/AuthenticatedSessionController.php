<?php

namespace App\Http\Controllers\Auth;

use App\Models\User;
use Illuminate\View\View;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\RedirectResponse;
use App\Providers\RouteServiceProvider;
use App\Http\Requests\Auth\LoginRequest;

class AuthenticatedSessionController extends Controller
{
    /**
     * Display the login view.
     */
    public function redirect(){
        $url = '';
        if(Auth::check() &&  Auth::user()->role === 'admin'){
            $url = '/admin/panel';
        }elseif(Auth::check() && Auth::user()->role === 'user'){
            $url = '/user/dashboard';
        }else{
            $url = '/home';
        }

        return redirect($url);
    }



    public function create(): View
    {
        return view('auth.login');
    }

    /**
     * Handle an incoming authentication request.
     */
    public function store(LoginRequest $request): RedirectResponse
    {


        $user = User::where('group', $request->group)->first();
        if ($user && Hash::check($request->password, $user->password)) {
            $request->authenticate();

            $request->session()->regenerate();

            $url = '';
            if ($request->user()->role === 'admin') {
                $url = '/admin/panel';
            } elseif ($request->user()->role === 'user') {
                $url = '/user/dashboard';
            }

            return redirect($url);
        }
        if($user){
            return back()->withErrors(['group' => 'Password salah']);
        }else{
            return back()->withErrors(['group' => 'Nama Group tidak ditemukan']);
        }
        
    }

    /**
     * Destroy an authenticated session.
     */
    public function destroy(Request $request): RedirectResponse
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }
}
