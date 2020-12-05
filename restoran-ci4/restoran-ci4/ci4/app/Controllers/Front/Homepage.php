<?php

namespace App\Controllers\Front;

use App\Controllers\BaseController;
use App\Models\Kategori_M;
use App\Models\Menu_M;

class Homepage extends BaseController
{
	protected $modelMenu, $pager, $modelKategori;
	public function __construct()
	{
		$this->modelMenu = new Menu_M();
		$this->modelKategori = new Kategori_M();
		$this->pager = \config\Services::pager();
	}
	public function index()
	{
		$menu = $this->modelMenu;
		$data = [
			'menus' => $menu->paginate(4, 'group1'),
			'judul' => 'Adventure Your Food',
			'pager' => $menu->pager
		];
		return view('Frontend/Menu/home', $data);
	}
	public function option()
	{
		$kategori = $this->modelKategori->findAll();
		$data = [
			'kategoris' => $kategori
		];
		return view('frontend/layout/option', $data);
	}
	public function read()
	{
		if (isset($_GET['idkategori'])) {
			$id = $_GET['idkategori'];
			$jumlah = $this->modelMenu->where('idkategori', $id)->findAll();
			$count = count($jumlah);
			$tampil = 4;
			$mulai = 0;
			if (isset($_GET['page'])) {
				$page = $_GET['page'];
				$mulai = ($tampil * $page) - $tampil;
			}
			$menu = $this->modelMenu->where('idkategori', $id)->findAll($tampil, $mulai);
			$data = [
				'judul' => 'Search your food',
				'menus' => $menu,
				'pager' => $this->pager,
				'tampil' => $tampil,
				'total' => $count

			];
			return view('frontend/menu/cari', $data);
		}
	}

	//--------------------------------------------------------------------

}
