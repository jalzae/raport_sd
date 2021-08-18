<?php

namespace App\Models;

use CodeIgniter\Model;

class NilaiModel extends Model
{
	protected $table                = 'nilai';
	public function table()
	{
		return $this->db->table($this->table);
	}
}
