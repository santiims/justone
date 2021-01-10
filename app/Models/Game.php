<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;

/**
 * @mixin Builder
 * @property int $id
 * @property string $code
 * @property string $state JSON encoded data of game's current state
 * @property boolean $finished
 */
class Game extends BaseModel
{
    protected $table = 'games';
}
