<?php

/**
 * Created by Reliese Model.
 * Date: Sat, 22 Jun 2019 07:25:32 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Anggaran
 * 
 * @property int $id_anggaran
 * @property int $id_admin
 * @property int $id_user
 * @property string $perihal
 * @property string $dokumen
 * @property string $invoice
 * @property \Carbon\Carbon $tanggal_anggaran
 * @property string $progress
 * @property \Carbon\Carbon $tanggal_progress
 * @property int $jumlah
 * @property string $coa
 * @property string $keterangan
 * @property bool $status
 * 
 * @property \App\Models\Admin $admin
 * @property \App\Models\User $user
 *
 * @package App\Models
 */
class Anggaran extends Eloquent
{
	protected $primaryKey = 'id_anggaran';
	public $timestamps = false;

	protected $casts = [
		'id_admin' => 'int',
		'id_user' => 'int',
		'jumlah' => 'int',
		'status' => 'bool'
	];

	protected $dates = [
		'tanggal_anggaran',
		'tanggal_progress'
	];

	protected $fillable = [
		'id_admin',
		'id_user',
		'perihal',
		'dokumen',
		'invoice',
		'tanggal_anggaran',
		'progress',
		'tanggal_progress',
		'jumlah',
		'coa',
		'keterangan',
		'status'
	];

	public function admin()
	{
		return $this->belongsTo(\App\Models\Admin::class, 'id_admin');
	}

	public function user()
	{
		return $this->belongsTo(\App\Models\User::class, 'id_user');
	}

	public function coa()
	{
		return $this->belongsTo(\App\Models\Coa::class, 'coa');
	}
}
