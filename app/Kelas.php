<?php

namespace App;

use Iluminate\Database\Eloquent\Model;

class Kelas extends Model
{
	public $table = 'kelas';

	protected $fillable = [
		'nama_kelas', 'jurusan'
	];
}