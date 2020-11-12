<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\Kategori_M;

class Menu extends BaseController
{
	public function index()
	{
		return view('menu/form');
	}

	public function insert()
	{
		$file = $this->request->getFile('gambar');

		$name = $file->getName();

		$file->move('./uploud');

		echo $name . "Sudah Di Uploud";
	}

	public function option()
	{
		$model = new Kategori_M();
		$kategori = $model->findAll();
		$data = [
			'kategori' => $kategori

		];
		return view('template/option', $data);
	}



	//--------------------------------------------------------------------

}
