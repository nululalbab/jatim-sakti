<?php

/**
 * Created by Reliese Model.
 * Date: Sat, 01 Jun 2019 15:25:54 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Admin
 * 
 * @property int $id
 * @property string $name
 * @property string $email
 * @property string $password
 * @property bool $active
 * @property string $remember_token
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * 
 * @property \Illuminate\Database\Eloquent\Collection $admin_roles
 * @property \Illuminate\Database\Eloquent\Collection $anggarans
 *
 * @package App\Models
 */
class Admin extends Eloquent
{
	protected $casts = [
		'active' => 'bool'
	];

	protected $hidden = [
		'password',
		'remember_token'
	];

	protected $fillable = [
		'name',
		'email',
		'password',
		'active',
		'remember_token'
	];

	public function admin_roles()
	{
		return $this->hasMany(\App\Models\AdminRole::class);
	}

	public function anggarans()
	{
		return $this->hasMany(\App\Models\Anggaran::class, 'id_admin');
	}
}
