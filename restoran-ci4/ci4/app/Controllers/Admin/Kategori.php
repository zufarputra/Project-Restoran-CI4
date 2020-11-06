<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\Kategori_M;

class Kategori extends BaseController
{
	public function index()
	{
		// return view('welcome_message');
		echo " <h1>Belajar CI-4 </h1>";
	}

	public function read()
	{
		$model = new Kategori_M();
		$kategori = $model->findAll();

		$data = [
			'judul' => 'SELECT DATA Dari controller',
			'kategori' => $kategori
		];
		return view("kategori/select", $data);
	}


	public function create()
	{

		return view("kategori/insert");
	}

	public function insert()
	{
		$model = new Kategori_M();
		$model->insert($_POST);

		return redirect()->to(base_url() . "/admin/kategori");
	}

	public function find($id = null)
	{
		echo view("template/header");
		echo view("kategori/update");
		echo view("template/footer");
	}

	public function update($id = null)
	{
		echo "Proses Update Data $id";
	}

	public function delete($id = null)
	{
		echo "Proses Delete Data";
	}

	//--------------------------------------------------------------------

}
