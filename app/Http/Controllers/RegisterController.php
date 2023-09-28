<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function index() {
        return view("register", [
            "title" => "Register"
        ]);
    }

    public function store(Request $request) {
        $validated = $request->validate([
            "name" => "required|min:2|max:64",
            "age" => "required|integer|between:1,120",
            "occupation" => "required|min:2|max:64",
            "weight" => "required|numeric|between:2.5,99.99",
            "email" => "required|email",
            "profile" => "required|mimes:jpg,jpeg,png|max:2048",
        ]);

        if ($request->file('profile')) {
            $validated['profile'] = $request->file('profile')->store('profile_img');
        }

        return view('profile', [
            'title' => 'Profile',
            'data' => $validated,
            'registerSuccess' => "Registration success! Welcome to Tokopaedi :D"
        ]);
    }
}