<?php 
namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class LoginController extends Controller
{
    use AuthenticatesUsers;

    protected $redirectTo = RouteServiceProvider::HOME;

    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    // Override the redirectTo method to implement role-based redirection
    protected function redirectTo()
    {
        if (auth()->user()->hasRole('admin')) {
            return '/admin';
        } elseif (auth()->user()->hasRole('attendee')) {
            return '/attendee';
        } elseif (auth()->user()->hasRole('eventorganizer')) {
            return '/eventorganizer';
        }

        return RouteServiceProvider::HOME; // Fallback to the default HOME route
    }
}
