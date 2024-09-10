<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminRegisterController extends Controller
{
    /**
     * Display the registration view.
     */
    public function create(): View
    {
        return view('adminsignup');
    }

    /**
     * Handle an incoming registration request.
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:'.User::class],
            'password' => ['required'],
        ]);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'usertype'=>'admin'
        ]);
        event(new Registered($user));

        Auth::login($user);

        return redirect(route('home'));
    }
}

