<?php

namespace App\Models;

use PHPUnit\Util\Json;
use Illuminate\Support\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class LdapAccountImportResult
 * @package App\Models
 *
 * @property integer $id
 *
 * @property string $uuid
 * @property bool $is_default
 * @property string|null $tags
 * @property integer|null $status_id
 *
 * @property integer $lines_count
 * @property integer $lines_parsed
 * @property integer $lines_parse_success
 * @property integer $lines_parse_fail
 *
 * @property Json $report
 *
 * @property Carbon $created_at
 * @property Carbon $updated_at
 */
class LdapAccountImportResult extends Model
{
    use HasFactory;

    protected $guarded = [];
    protected $table = 'ldap_account_import_results';
}
