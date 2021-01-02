<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginRpcController extends Controller
{
    public function login(Request $request): bool
    {
        $username = $request->username ?? null;
        $password = $request->password ?? null;
        $anonymousUser = $request->anonymousUser ?? null;

        if (empty($username) || empty($password) || empty($anonymousUser)) {
            return false;
        }

        $request->session()->put(['username' => $username]);

        // todo: handle login stuff. database etc.
        return true;
    }

    public function check(Request $request): array
    {
        return [
            'username' => $request->session()->get('username')
        ];
    }
}
