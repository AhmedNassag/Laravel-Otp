<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OtpController extends Controller
{

    public function index()
    {
        return view('auth.otp');
    }



    public function create()
    {
        //
    }



    public function store(Request $request)
    {
        $user = auth()->user();
        if($request->input('otp_code') == $user->otp_code)
        {
            $user->resetOtpCode();
            return redirect()->route('dashboard');
        }
        else
        {
            return redirect()->back()->withErrors(['message' => 'كود التحقق الذي أدخلته غير صحيح برجاء التأكد وإعادة المحاولة']);
        }
    }



    public function show(string $id)
    {
        //
    }



    public function edit(string $id)
    {
        //
    }



    public function update(Request $request, string $id)
    {
        //
    }



    public function destroy(string $id)
    {
        //
    }
}
