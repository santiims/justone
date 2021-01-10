<?php

namespace App\Http\Services;

use App\Models\Player;

class LoginService
{
    /**
     * @param string $username
     * @param string $password
     * @return bool
     */
    public function validateUser(string $username, string $password): bool
    {
        try {
            $player = (new Player())->where('username', '=', $username)->first();

            if (!$player) {
                return false;
            }

            $hash = $player->password;

            if (!password_verify($password, $hash)) {
                return false;
            }
        } catch (\Throwable $e) {
            return false;
        }

        return true;
    }

    /**
     * @param string $username
     * @param string $password
     * @return bool
     */
    public function registerUser(string $username, string $password): bool
    {
        try {
            $passwordHash = password_hash($password, PASSWORD_DEFAULT);
            $player = new Player();
            $player->username = $username;
            $player->password = $passwordHash;
            $player->save();
        } catch (\Throwable $e) {
            return false;
        }

        return true;
    }
}
