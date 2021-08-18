<?php

namespace App\Models;

use CodeIgniter\Model;

class TypeModel extends Model
{
	protected $table                = 'type_muatan';
	public function table()
	{
		return $this->db->table($this->table);
	}
}
