<?php

namespace App\Http\Structures;

class GameState
{
    /**
     * @var string The current word being guessed by the guesser
     */
    public string $mysteryWord;

    /**
     * @var string[] Words submitted by other players as clues for guesser to guess mystery word
     */
    public array $submittedWords;

    /**
     * @var string The name of the player who is guessing the mystery word
     */
    public string $guesser;

    /**
     * @var string The name of the player who will be responsible for sorting out invalid words
     */
    public string $judge;
}
