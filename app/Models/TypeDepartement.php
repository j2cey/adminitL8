<?php

namespace App\Models;

use Illuminate\Support\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class TypeDepartement
 * @package App\Models
 *
 * @package App
 *
 * @property integer $id
 *
 * @property string $uuid
 * @property bool $is_default
 * @property string|null $tags
 * @property integer|null $status_id
 *
 * @property string $intitule
 * @property string|null $description
 *
 * @property Carbon $created_at
 * @property Carbon $updated_at
 */
class TypeDepartement extends Model
{
    use HasFactory;

    protected $guarded = [];

    #region Eloquent Relationships

    public function departements() {
        return $this->hasMany('App\Departement', 'type_departement_id');
    }

    #endregion

    #region Validation Rules

    public static function defaultRules() {
        return [];
    }
    public static function createRules() {
        return array_merge(self::defaultRules(), [
            'intitule' => ['required','unique:type_departements,intitule,NULL,id,deleted_at,NULL'],
        ]);
    }
    public static function updateRules($model) {
        return array_merge(self::defaultRules(), [
            'intitule' => ['required','unique:type_departements,intitule,'.$model->id.',id,deleted_at,NULL',],
        ]);
    }
    public static function validationMessages() {
        return [
            'intitule.required' => 'Prière de renseigner l Intitule',
        ];
    }

    #endregion
}
