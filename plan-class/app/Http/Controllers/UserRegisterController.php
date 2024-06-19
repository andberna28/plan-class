<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rules\Password;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class UserRegisterController extends Controller
{
    public function store(Request $request, User $user)
    {
        Validator::make($request->all(), [
            'name' => ['required', 'string', 'min:3'],
            'email' => ['required', 'email'],
            'password' => ['required', 'confirmed', Password::min(8)],
        ])->validate();

        $user = $user->create($request->only([
            'name',
            'email',
            'password',
        ]));

        Auth::login($user);
        return redirect()->route('login');
    }
}
