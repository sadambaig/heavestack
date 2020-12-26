<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Auth;
class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    //protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware(['guest','active'])->except('logout');
    }
    public function username()
        {
            return 'username';
        }
    public function redirectTo() {
        $user = Auth::user(); 
         
          $role=$user->role->pluck('roleName')->first();

          //dd($role);
        
          switch ($role) {
            case 'manager':

              return '/dashboard';
            break;
            case 'admin':
              //return '/admin/dashboard';
            break; 
            case 'employee':
                echo "emaployee";
            break;
            case 'intern':
                echo "intrn";
            break;

            default:
              return '/login'; 
            break;
          }
        }
}
