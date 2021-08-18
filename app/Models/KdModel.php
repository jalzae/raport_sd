<?php

namespace App\Models;

use CodeIgniter\Model;

class KdModel extends Model
{
	protected $table                = 'kd_muatan';
	public function table()
	{
		return $this->db->table($this->table);
	}
}
