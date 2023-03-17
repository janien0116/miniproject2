<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class JoinerController extends Controller
{
    public function store(Request $request){
        $validated = $request->validate([
            "first_name" => ['required'],
            "last_name" => ['required'],
            "contact_no" => ['required'],
            "name" => ['required'],
            "password" => ['required'],
            "email" => ['required']
        ]);
        $validated['password'] = bcrypt($validated['password']);
        User::create($validated);
        return redirect()->route('log_in');
    }
}
