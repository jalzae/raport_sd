<?php

namespace App\Models;

use CodeIgniter\Model;

class MuatanModel extends Model
{
	protected $table                = 'muatan';
	public function table()
	{
		return $this->db->table($this->table);
	}
}
