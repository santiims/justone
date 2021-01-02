<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;

/**
 * @mixin Builder
 * @property int $id
 * @property string $code
 * @property string $state JSON encoded data of game's current state
 * @property boolean $finished
 */
class Game extends Model
{
    protected $table = 'games';
}
