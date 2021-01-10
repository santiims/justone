<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * This class overrides annoying Eloquent default in the Model class
 */
class BaseModel extends Model
{
    // Do not attempt to write updated_at/created_at columns
    public $timestamps = false;
}
