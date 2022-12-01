<?php

namespace App\Http\Controllers\Resource;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\User;

class LoginController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function login(Request $request)
    {
        $users = User::where('username', $request->user_form)->where('password', md5($request->pass_form))->first();

        if (is_null($users)) {
            return redirect()->back()->with('message', 'Usuario não encontrado');
        } else {
            return view("panel")
            ->with("name", $users->name)
            ->with("permission", $users->permission)
            ->with("logged", true);
        }
    }
}
