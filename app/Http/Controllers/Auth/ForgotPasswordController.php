<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Hash;

class ForgotPasswordController extends Controller
{
    public function forgot() 
    {
        return view("auth.forgotpassword");
    }

    public function reset(Request $request) 
    {
        $request->validate([
            "email" => "required|email|exists:users"
        ]);
        
        $token = Str::random(64);

        DB::table("password_forgot")->updateOrInsert(
            ['email' => $request->email],
            [
                "token" => $token,
                "created_at" => now(),
                "updated_at" => now(),
            ]
        );

        Mail::send("emails.forgotpassword", ["token" => $token], function($message) use($request){
            $message->to($request->email);
            $message->subject("Forgot Password");
        });

        return redirect()->route("login")->with("succes", "We have sent you a password reset link.");
    }

    public function resetlink($token)
    {
        return view("auth.resetlink", compact("token"));
    }

    public function resetpassword(Request $request)
    {
        $request->validate([
            "token" => "required",
            "password" => "required|confirmed"
        ]);

        $first = DB::table("password_forgot")->where("token", $request->token)->first();

        if (is_null($first)) {
            return back()->with("error", "something went wrong.");
        }

        $user = User::where("email", $first->email)->first();
        
        if (is_null($user)) {
            return back()->with("error", "User not found.");
        }

        $user->password = Hash::make($request->password);
        $user->save();

        DB::table("password_forgot")->where("token", $request->token)->delete();
        
        return redirect()->route("login")->with("succes", "Password reset succesfully.");      
    }
}
