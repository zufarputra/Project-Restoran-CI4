<?php

namespace App\Controllers\Front;

use App\Controllers\BaseController;
use App\Models\Menu_M;

class Cart extends BaseController
{

    public function index()
    {
        $modelMenu = new Menu_M();
        $id = $this->request->getPost('idmenu');
        if (empty(session()->get('loggedIn'))) {
            return redirect()->to(base_url('front/loginp'));
        } else {
            $this->isi($id);
            foreach (session()->get() as $key => $value) {
                if ($key <> 'pelanggan' && $key <> 'email' && $key <> 'user' && $key <> 'level' && $key <> 'password' && $key <> 'loggedIn' && $key <> 'ci_previous_url' && $key <> '_ci_last_regenerate') {
                    $id = substr($key, 1);
                    $menu[] = $modelMenu->where('idmenu', $id)->findAll();
                    $jumlah[] = $value;
                }
            }
            if (!isset($menu)) {
                $menu = [];
                $jumlah = [];
            }
        }
        $data = [
            'menus' => $menu,
            'jumlah' => $jumlah

        ];
        echo view('frontend/menu/cart', $data);
    }
    public function isi($id)
    {
        if (session()->has('_' . $id)) {
            session()->set('' . $id, session()->get('' . $id));
        } else {
            session()->set('_' . $id, 1);
        }
    }
    public function delete($id = null)
    {
        $idgb = '_' . $id;
        session()->remove($idgb);
        return redirect()->to(base_url('front/cart'));
    }
    public function kurang($id = null)
    {
        $idgb = '_' . $id;
        session()->set('_' . $id, session()->get('_' . $id) - 1);
        if (session()->get('_' . $id) == 0) {
            session()->remove($idgb);
        }
        return redirect()->to(base_url('front/cart'));
    }

    public function tambah($id = null)
    {
        session()->set('_' . $id, session()->get('_' . $id) + 1);
        return redirect()->to(base_url('front/cart'));
    }
}
