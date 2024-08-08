<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\UserModel;
use Illuminate\support\facades\hash;
use Illuminate\Support\Facades\Auth;

class userController extends Controller
{
    public function home()
    {
        return view('home');
    }

    public function form_login()
    {
        return view('form_login');
    }

    public function tentang()
    {
        return view('tentang');
    }

    public function kontak()
    {
        return view('kontak');
    }

    public function form()
    {
        return view('form');
    }

    public function action_login(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'email_text' => 'required',
            'password_text' => 'required',
        ], [
            'email_text.required' => 'Username  Wajib Diisi.',
            'password_text.required' => 'Passsword Wajib Diisi.',

        ]);


        if ($validator->fails()) {

            return back()->withErrors($validator);
        }
        if (Auth::attempt(['email' => $request->email_text, 'password' => $request->password_text])) {
            $request->session()->regenerate();

            return redirect()->intended('/dashboard');
        }

        // dd(['email' => $request->email_text, 'password' => $request->password_text]);

        return back()->withErrors("User/Password Tidak tepat");
    }
}
