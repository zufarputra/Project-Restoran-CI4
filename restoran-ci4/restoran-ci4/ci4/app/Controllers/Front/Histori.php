<?php

namespace App\Controllers\Front;

use App\Controllers\BaseController;
use App\Models\Order_M;
use App\Models\OrderDetail_M;

class Histori extends BaseController
{
    protected $modelOrder, $pager, $modelDetail;
    public function __construct()
    {
        $this->modelOrder = new Order_M();
        $this->modelDetail = new OrderDetail_M();
        $this->pager = \Config\Services::pager();
    }
    public function index()
    {
        if (empty(session()->get('loggedIn'))) {
            return redirect()->to(base_url('front/loginp'));
        }
        $email = session()->get('email');
        $order = $this->modelOrder->where('email', $email)->findAll();
        $jumlah = count($order);
        $tampil = 4;
        $mulai = 0;
        if (isset($_GET['page'])) {
            $page = $_GET['page'];
            $mulai = ($tampil * $page) - $tampil;
        }
        $order = $this->modelOrder->where('email', $email)->findAll($tampil, $mulai);
        $data = [
            'title' => 'FoodsApp',
            'judul' => 'History',
            'order' => $order,
            'pager' => $this->pager,
            'tampil' => $tampil,
            'total' => $jumlah

        ];
        return view('frontend/menu/histori', $data);
    }
    public function detail($id = null)
    {
        if (empty(session()->get('loggedIn'))) {
            return redirect()->to(base_url('front/loginp'));
        }
        $order = $this->modelDetail->where('idorder', $id)->findAll();
        $jumlah = count($order);
        $tampil = 4;
        $mulai = 0;
        if (isset($_GET['page'])) {
            $page = $_GET['page'];
            $mulai = ($tampil * $page) - $tampil;
        }
        $detail = $this->modelDetail->where('idorder', $id)->findAll($tampil, $mulai);
        $data = [
            'title' => 'FoodsApp',
            'judul' => 'Detail',
            'menu' => $detail,
            'pager' => $this->pager,
            'tampil' => $tampil,
            'total' => $jumlah
        ];
        return view('frontend/menu/detail', $data);
    }
}
