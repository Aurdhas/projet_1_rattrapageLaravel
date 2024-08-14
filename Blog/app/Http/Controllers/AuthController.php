<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use App\Models\User;
use App\Models\Category;
use App\Models\Post;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class AuthController extends Controller
{
    public function index()
    {
        return view('auth.login');
    }

    public function login(Request $request)
    {

        $validator= $request->validate([
            'email'=>'required',
            'password'=>'required',
        ]);

        $identifications=$request->only('email','password');

        if(Auth::attempt($identifications)){
            Session::regenerate();
            return redirect()->intended('dashboard')
            ->withSuccess('Signed in');
        }

        $validator['emailPassword']='Email address or password is incorrect.';

        return redirect("login")->withErrors($validator);
    }

    public function registration()
    {
        return view('auth.register');
    }

    public function customRegistration(Request $request)
    {
        $request->validate([
            'name'=>'required|string',
            'email'=>'required|email|unique:users',
            'password'=>'required|min:6|confirmed',
        ]);

        $data=$request->all();
        User::create([
            'name'=>$data['name'],
            'email'=>$data['email'],
            'password'=> Hash::make($data['password'])
        ]);
        return redirect("dashboard")->withSuccess('You have signed-in');
    }

    public function create(array $data)
    {
        return User::create([
            'name'=>$data['name'],
            'email'=>$data['email'],
            'password'=> Hash::make($data['password'])
        ]);
    }

    public function update(Request $request)
    {
    $id=Auth::user()->id;
      $request->validate([
        'name' => 'required',
        'email' => 'required',
      ]);
      $user = User::find($id);
      $user->update($request->all());
      return redirect()->route('profile')
        ->with('success', 'User updated successfully.');
    }

    public function edit($id)
  {
    $post = User::find($id);
    return view('auth.profile', compact('user'));
  }

    public function dashboard()
    {

        if(Auth::check()){
            $users= User::all();
            $categories = Category::all();
            $posts = Post::orderBy('created_at', 'desc')->get();
            return view('auth.dashboard',
        ['posts' =>$posts,'categories'=>$categories,'users'=>$users,'posts'=>DB::table('posts')->paginate(8)]);

        }

        return view('auth.home');
    }

    public function signOut()
    {
        Session::flush();
        Auth::logout();

        return view('auth.home');
    }
}
