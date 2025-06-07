<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class ModelHasRole
 * 
 * @property int $role_id
 * @property string $model_type
 * @property int $model_id
 * 
 * @property User $user
 *
 * @package App\Models
 */
class ModelHasRole extends Model
{
	protected $table = 'model_has_roles';
	protected $primaryKey = 'role_id';
	public $timestamps = false;

	protected $casts = [
		'model_id' => 'int'
	];

	protected $fillable = [
		'model_type',
		'model_id'
	];

	public function user()
	{
		return $this->belongsTo(User::class, 'model_id');
	}
}
