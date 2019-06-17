<?php

/**
 * Created by Reliese Model.
 * Date: Sat, 01 Jun 2019 15:27:42 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;
use Illuminate\Auth\Authenticatable;

/**
 * Class User
 *
 * @property int $id
 * @property int $id_unit
 * @property string $name
 * @property string $email
 * @property \Carbon\Carbon $email_verified_at
 * @property string $password
 * @property string $remember_token
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 *
 * @property \App\Models\Unit $unit
 *
 * @package App\Models
 */
class User extends Eloquent
{
	protected $casts = [
		'id_unit' => 'int'
	];

	protected $dates = [
		'email_verified_at'
	];

	protected $hidden = [
		'password',
		'remember_token'
	];

	protected $fillable = [
		'name',
		'email',
		'id_unit',
		'email_verified_at',
		'password',
		'remember_token'
	];

	public function unit()
	{
		return $this->belongsTo(\App\Models\Unit::class, 'id_unit');
	}
}
