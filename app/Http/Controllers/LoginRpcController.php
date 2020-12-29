<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginRpcController extends Controller
{
    public function login(Request $request)
    {
        $username = $request->username ?? null;
        $password = $request->password ?? null;
        $anonymousUser = $request->anonymousUser ?? null;

        if (empty($username) || empty($password) || empty($anonymousUser)) {
            return false;
        }

        // todo: handle login stuff. database etc.
        return true;
    }
}
