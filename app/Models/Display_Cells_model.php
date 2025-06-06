<?php

namespace App\Models;

use CodeIgniter\Model;

class Display_Cells_model extends model
{
	public function getCells() {
		$db = \Config\Database::connect();
		$builder = $db->table('cells');
		$query=$builder->get();
		return $query->getResult();
	}
}