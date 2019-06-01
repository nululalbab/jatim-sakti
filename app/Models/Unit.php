<?php

/**
 * Created by Reliese Model.
 * Date: Sat, 01 Jun 2019 15:27:47 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Unit
 * 
 * @property int $id_unit
 * @property string $nama_unit
 * @property int $anggaran_unit
 * 
 * @property \Illuminate\Database\Eloquent\Collection $users
 *
 * @package App\Models
 */
class Unit extends Eloquent
{
	protected $table = 'unit';
	protected $primaryKey = 'id_unit';
	public $timestamps = false;

	protected $casts = [
		'anggaran_unit' => 'int'
	];

	protected $fillable = [
		'nama_unit',
		'anggaran_unit'
	];

	public function users()
	{
		return $this->hasMany(\App\Models\User::class, 'id_unit');
	}
}
