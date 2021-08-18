<?php

namespace App\Models;

use CodeIgniter\Model;

class JenisNilaiModel extends Model
{
	
	protected $table                = 'jenis_nilai';
	public function table()
	{
		return $this->db->table($this->table);
	}
}
