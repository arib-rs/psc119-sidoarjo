<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\Session;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;

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
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
    public function showLoginForm(Request $request)
    {
        // $cekSession = Session::where('hostname', $request->ip() . '-' . gethostname())
        //     ->where('device_id', substr(exec('getmac'), 0, 17))
        //     ->where('logout_at', null)
        //     ->orderBy('created_at', 'desc')
        //     ->first();
        // // dd($cekSession->user_id);
        // if ($cekSession) {
        //     $person = User::with('person', 'role')->find($cekSession->user_id);
        //     $request->session()->put('user', $person->toArray());

        //     return redirect('/dashboard');
        //     // dd(session()->all());
        // } else {
        // }
        return view('layout.login');
    }
    protected function validateLogin(Request $request)
    {
        $request->validate([
            $this->username() => 'required|string|exists:users,username',
            'password' => 'required|string',
        ], [
            $this->username() . '.exists' => "Username belum terdaftar"
        ]);
    }
    protected function sendFailedLoginResponse(Request $request)
    {
        throw ValidationException::withMessages([
            'password' => [trans('auth.password')],
        ]);
    }
    protected function authenticated(Request $request, $user)
    {
        // $cekSession = Session::where('logout_at', null)
        //     ->where('user_id', $user->id)
        //     ->orderBy('created_at', 'desc')
        //     ->first();
        // // dd($cekSession->user_id);
        // if ($cekSession) {
        //     echo "hai";
        //     // $person = User::with('person', 'role')->find($cekSession->user_id);
        //     // $request->session()->put('user', $person->toArray());

        //     // return redirect('/dashboard');
        //     // dd(session()->all());
        // } else {
        // }
        // // $request->session()->put('user', $user->toArray());
        Session::where([
            'user_id' => $request->session()->get('user.id'),
            'device_id' => substr(exec('getmac'), 0, 17),
            'hostname' => $request->ip() . '-' . gethostname(),
            'logout_at' => null
        ])->update([
            'logout_at' => now(),
            'status' => 'PC Login Ended'
        ]);

        Session::create([
            'hostname' => $request->ip() . '-' . gethostname(),
            'device_id' => substr(exec('getmac'), 0, 17),
            'status' => 'PC Login',
            'user_id' => $user->id,
            'login_at' => now()
        ]);
        $person = User::with('person', 'role')->find($user->id);
        $request->session()->put('user', $person->toArray());
    }

    public function logout(Request $request)
    {
        Session::where([
            'user_id' => $request->session()->get('user.id'),
            'device_id' => substr(exec('getmac'), 0, 17),
            'hostname' => $request->ip() . '-' . gethostname(),
            'logout_at' => null
        ])->update([
            'logout_at' => now(),
            'status' => 'PC Login Ended'
        ]);

        $this->guard()->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        if ($response = $this->loggedOut($request)) {
            return $response;
        }

        return $request->wantsJson()
            ? new JsonResponse([], 204)
            : redirect('/');
    }
    public function username()
    {
        return 'username';
    }
}
