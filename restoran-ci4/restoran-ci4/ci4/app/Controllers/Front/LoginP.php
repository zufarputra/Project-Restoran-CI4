<?php

namespace App\Controllers\Front;

use App\Controllers\BaseController;
use App\Models\Pelanggan_M as ModelsPelanggan_M;

class LoginP extends BaseController
{
	public function index()
	{
		$data = [];
		if ($this->request->getMethod() == 'post') {
			$email = $this->request->getPost('email');
			$password = $this->request->getPost('password');

			$model = new ModelsPelanggan_M();
			$user = $model->where(['email' => $email, 'password' => $password, 'aktif' => 1])->first();
			if (empty($user)) {
				$data['info'] = "User Atau Password Salah";
			} else {
				$this->setSession($user);
				return redirect()->to(base_url("front/homepage"));
			}
		} else {
			# code...
		}
		return view('Frontend/Layout/login');
	}

	public function setSession($user)
	{
		$data = [
			'idpelanggan' => $user['idpelanggan'],
			'email' => $user['email'],
			'password' => $user['password'],
			'loggedIn' => true
		];
		session()->set($data);
	}
	public function logout()
	{
		session()->destroy();
		return redirect()->to(base_url('Front/homepage'));
	}

	//--------------------------------------------------------------------

}
