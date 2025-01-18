<?php
namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\Auth\LoginRequest;

class LoginController extends Controller
{
    /**
     * Handle an incoming authentication request.
     */
    public function authenticate(LoginRequest $request)
    {
        $request->authenticate();

        $request->session()->regenerate();

        return $this->authenticated($request);
    }

    /**
     * Redirect users based on their role.
     */
    protected function authenticated(Request $request)
    {
        if (Auth::user()->status == 'admin') {
            return redirect()->intended('/dashboard');
        }

        return redirect()->intended('/dashboard');
    }
}
