<?php

namespace App\Models;

use CodeIgniter\Model;

class SiswaModel extends Model
{
	protected $table                = 'siswa';
	public function table()
	{
		return $this->db->table($this->table);
	}
}
