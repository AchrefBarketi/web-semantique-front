<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class UserController extends Controller
{
    public function create()
    {
        return view('register');
    }

    // Create New User
    public function store(Request $request)
    {
        $request->validate([
            'name' => ['required', 'min:3'],
            'email' => ['required', 'email', Rule::unique('users', 'email')],
            'password' => 'required|confirmed|min:6',
           // 'picture' => 'required'
        ]);

        $image = base64_encode(file_get_contents($request->picture));

        // Hash Password
        $password = bcrypt($request->password);

        $user = new User();
        $user->name = $request->input('name');
        $user->email = $request->input('email');
        $user->password = $password;

        $user->picture = $image;


        $user->save();



        // Create User
      //  $user = User::create($formFields, $image);

        // Login
        auth()->login($user);

        return redirect('/')->with('message', 'User created and logged in');
    }

    // Update User

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        $request->validate([
            'name' => ['required', 'min:3'],
            'email' => ['required', 'email'],
        //    'password' => 'required|confirmed|min:6',
           // 'picture' => 'required'
        ]);

        // if($request->picture != null){
            $image = base64_encode(file_get_contents($request->picture));

        // }

        // Hash Password
      //  $password = bcrypt($request->password);

        $user = User::find($id);
        $user->name = $request->input('name');
        $user->email = $request->input('email');
       // $user->password = $password;

        $user->picture = $image;


        $user->save();


        return redirect('/profile')->with('message', 'User created and logged in');
    }

    // Logout User
    public function logout(Request $request)
    {
        auth()->logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/login')->with('message', 'You have been logged out!');
    }

    // Show Login Form
    public function login()
    {
        return view('theme.login');
    }

    // Authenticate User
    public function authenticate(Request $request)
    {
        $formFields = $request->validate([
            'email' => ['required', 'email'],
            'password' => 'required'
        ]);

        if (auth()->attempt($formFields)) {
            $request->session()->regenerate();

            return redirect('/')->with('message', 'You are now logged in!');
        }

        return back()->withErrors(['email' => 'Invalid Credentials'])->onlyInput('email');
    }
}
