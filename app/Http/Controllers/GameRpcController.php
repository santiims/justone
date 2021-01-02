<?php

namespace App\Http\Controllers;

use App\Models\Game;
use Illuminate\Http\Request;

class GameRpcController extends Controller
{
    public function getCode()
    {
        $existingCodes = (new Game)->where('finished', '=', 0)
            ->get()
            ->map(fn(Game $game) => $game->code)
            ->all();

        $newCode = $this->generateRandomString();

        while (in_array($newCode, $existingCodes)) {
            $newCode = $this->generateRandomString();
        }

        return [
            'code' => $newCode
        ];
    }

    public function start()
    {
        // todo
        return true;
    }

    public function join(Request $request)
    {
        // todo
        return true;
    }

    /**
     * https://stackoverflow.com/questions/4356289/php-random-string-generator
     *
     * @param int $length
     * @return string
     */
    private function generateRandomString($length = 6) {
        return substr(str_shuffle(str_repeat($x='0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ', ceil($length/strlen($x)) )),1,$length);
    }
}
