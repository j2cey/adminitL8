<?php

namespace App\Models;

use Illuminate\Support\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class EmailAddress
 * @package App\Models
 *
 * @property integer $id
 *
 * @property string $uuid
 * @property bool $is_default
 * @property string|null $tags
 * @property integer|null $status_id
 *
 * @property string $email
 *
 * @property Carbon $created_at
 * @property Carbon $updated_at
 */
class EmailAddress extends BaseModel
{
    use HasFactory;

    protected $guarded = [];
}
