<?php

/**
 * Created by Reliese Model.
 * Date: Sat, 01 Jun 2019 15:25:54 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class AdminRole
 * 
 * @property int $id
 * @property int $role_id
 * @property int $admin_id
 * 
 * @property \App\Models\Admin $admin
 *
 * @package App\Models
 */
class AdminRole extends Eloquent
{
	protected $table = 'admin_role';
	public $timestamps = false;

	protected $casts = [
		'role_id' => 'int',
		'admin_id' => 'int'
	];

	protected $fillable = [
		'role_id',
		'admin_id'
	];

	public function admin()
	{
		return $this->belongsTo(\App\Models\Admin::class);
	}
}
