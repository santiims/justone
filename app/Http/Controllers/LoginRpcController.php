<?php

namespace App\Http\Controllers;

use App\Http\Services\LoginService;
use Illuminate\Http\Request;

class LoginRpcController extends Controller
{
    private LoginService $loginService;

    public function __construct(LoginService $loginService)
    {
        $this->loginService = $loginService;
    }

    public function login(Request $request): bool
    {
        $username = $request->username ?? null;
        $password = $request->password ?? null;
        $anonymousUser = $request->anonymousUser ?? null;

        if (empty($username) || empty($password)) {
            return false;
        }

        if (is_null($anonymousUser)) {
            return false;
        }

        $request->session()->put(['username' => $username]);

        return $anonymousUser
            ? $this->loginService->registerUser($username, $password)
            : $this->loginService->validateUser($username, $password);
    }

    public function check(Request $request): array
    {
        return [
            'username' => $request->session()->get('username')
        ];
    }
}
