<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;

/**
 * @mixin Builder
 * @property int $id,
 * @property string $username
 * @property string $password
 */
class Player extends BaseModel
{
    protected $table = 'players';
}
