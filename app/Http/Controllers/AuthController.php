<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\ValidationException;

class AuthController extends Controller
{
    public function register()
    {
        return view('auth/register');
    }
  
    public function registerSave(Request $request)
    {
        Validator::make($request->all(), [
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required|confirmed'
        ])->validate();
  
        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'level' => 'Admin'
        ]);
  
        return redirect()->route('login');
    }
  
    public function login()
    {
        return view('auth/login');
    }
  
    public function loginAction(Request $request)
    {
        Validator::make($request->all(), [
            'email' => 'required|email',
            'password' => 'required'
        ])->validate();
  
        if (!Auth::attempt($request->only('email', 'password'), $request->boolean('remember'))) {
            throw ValidationException::withMessages([
                'email' => trans('auth.failed')
            ]);
        }
  
        $request->session()->regenerate();
  
        return redirect()->route('dashboard');
    }
  
    // logout
    public function logout(Request $request)
    {
        Auth::guard('web')->logout();
  
        $request->session()->invalidate();
  
        return redirect('/');
    }
 
    public function profile()
    {
        return view('profile');
    }

    public function profileUpdate(){
        Validator::make($request->all(), [
            'name' => 'required',
            'email' => 'required|email',
                
        ])->validate();

        User::update([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->pasword)
        ]);

        return view('profile');
    }

    // user Management
    public function index(){
        $user = User::orderBy('created_at', 'DESC')->get();

        return view('users.index', compact('user'));
    }

    public function create(){
        return view('users.create');
    }

    public function store(Request $request){
   
        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'level' => $request->level,
        ]);

        return redirect()->route('users')->with('success', 'user added successfully');
    }

    public function show(string $id){
        $user = User::findOrFail($id);
        
        return view('users.show', compact('user'));
    }

    public function edit(string $id){
        $user = User::findOrFail($id);
        
        return view('users.edit', compact('user'));
    }

    public function update(Request $request, string $id){
        $user = User::findOrFail($id);
   
        User::where('id', $id)->update([
            'name' => $request->name,
            'email' => $request->email,
            'level' => $request->level,
          
        ]);
        
        return redirect()->route('users')->with('success', 'user updated successfully');
    }

    public function destroy(string $id){
        $user = User::findOrFail($id);

        $user->delete();

        return redirect()->route('users')->with('success', 'user deleted Successfully');
    }
}
