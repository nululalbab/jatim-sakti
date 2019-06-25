<?php

/**
 * Created by Reliese Model.
 * Date: Sat, 22 Jun 2019 07:25:35 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Coa
 * 
 * @property string $coa
 * @property int $jumlah_coa
 * 
 * @property \Illuminate\Database\Eloquent\Collection $anggarans
 *
 * @package App\Models
 */
class Coa extends Eloquent
{
	protected $table = 'coa';
	protected $primaryKey = 'coa';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'jumlah_coa' => 'int'
	];

	protected $fillable = [
		'jumlah_coa',
		'coa'
	];

	public function anggarans()
	{
		return $this->hasMany(\App\Models\Anggaran::class, 'coa');
	}
}
