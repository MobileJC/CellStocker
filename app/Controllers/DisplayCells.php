<?php

namespace App\Controllers;
use App\Models\Display_Cells_model;

class DisplayCells extends BaseController
{
	public function index()
	{
		$model = new Display_Cells_model();
		$allCells['data'] = $model->getCells();

		echo view("displayCells", $allCells);
	}
}