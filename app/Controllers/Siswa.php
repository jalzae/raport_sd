<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Siswa extends BaseController
{
	public function index()
	{
		return view('siswa/siswa');
	}
}
