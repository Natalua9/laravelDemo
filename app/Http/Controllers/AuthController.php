<?php

namespace App\Http\Controllers;

use Auth;
use Hash;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\App;

use Session;

use Validator;

class AuthController extends Controller
{
    public function index()
    {
        return view('index');
    }
    public function signin(Request $request)
    {
        $request->validate([
            'login' => 'required',
            'password' => 'required',
        ]);
        if (Auth::attempt(['login' => $request->login, 'password' => $request->password])) {
            $user = Auth::user();

            if ($user->role === 'user') {
                Session::put('user_email', auth()->user()->email);
                return redirect()->route('person');
            } else {
                Session::put('user_email', auth()->user()->email);
                return redirect()->route('admin');
            }

        } else {
            return response('Неверные данные');

        }
    }
    public function person()
    {
        $app= App::all();
        
        return view('person');

    }
    public function admin()
    {
        $app= App::all();
        return view('admin' , $app);

    }
    public function show_signup()
    {
        return view('signup');
    }
    public function signup(Request $request)
    {
        $request->validate([
            'full_name' => 'required',
            'email' => 'required|unique:users',
            'login' => 'required',
            'password' => 'required|min:6',
            'phone' => 'required',
        ]);
        $user = User::create([
            'full_name' => $request->full_name,
            'email' => $request->email,
            'login' => $request->login,
            'phone' => $request->phone,
            'password' => Hash::make($request->password),

        ]);
        Auth::login($user);
        Session::put('user_email', auth()->user()->email);
        return redirect()->route('person');
    }

    public function logout()
    {
        Auth::logout();
        Session::forget('auth');
        Session::forget('user_email');
        return redirect()->route('index');
    }

    // public function AllTaskUser($id)
    // {
    //     $app = App::findId($id);
    //     dd($app);
    //     return redirect()->route('person', compact('$app'));
    // }
    public function addTask()
    {
        return view('addTask');
    }
    public function addTaskUser(Request $request)
    {
        $user = Auth::user();
        $request->validate([
            'service_type' => 'required',
            'adress' => 'required',
            'date_time' => 'required',
          
        ]);
        $app = App::create([
            'service_type' => $request->service_type,
            'adress' => $request->adress,
            'user_id' =>$user ->id,
            'date_time' => $request->date_time,

        ]);
        return view('person');
    }

}
