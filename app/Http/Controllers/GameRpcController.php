<?php

namespace App\Http\Controllers;

use App\Models\Game;
use Illuminate\Http\Request;

class GameRpcController extends Controller
{
    public function getCode(): array
    {
        $existingCodes = (new Game())->where('finished', '=', 0)
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

    public function start(Request $request): bool
    {
        $code = $request->code;

        $game = new Game();
        $game->code = $code;
        $game->save();

        $request->session()->put(['code' => $code]);

        return true;
    }

    public function join(Request $request): bool
    {
        $code = $request->code;

        $game = (new Game())->where('code', '=', $code)->first();

        if ($game) {
            $request->session()->put($code);
            return true;
        }

        return false;
    }

    /**
     * https://stackoverflow.com/questions/4356289/php-random-string-generator
     *
     * @param int $length
     * @return string
     */
    private function generateRandomString($length = 6): string
    {
        return substr(str_shuffle(str_repeat($x = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ', ceil($length / strlen($x)))), 1, $length);
    }
}
