<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\UserModel;

class LoginController extends BaseController
{
    protected $user;
    protected $password;
    protected $level;
    protected $usermodel;
    public function __construct()
    {
        $this->usermodel = new UserModel();
    }
    public function index()
    {
        //Tampilkan form login
        return view('login/formlogin');
    }
    public function logout()
    {
        session()->destroy();
        return redirect()->to('login');
    }
    public function check()
    {
        $this->user = $this->request->getVar('username');
        $this->password = $this->request->getVar('password');
        $check = $this->usermodel
            ->where(['username' => $this->user, 'password' => $this->password])
            ->first();
        if ($check > 0) :
            //echo "login berhasil";
            $sessiondata = [
                'SUDAH_LOGIN'   => true,
                'id_user'       => $check['id_user'],
                'level'         => $check['level']
            ];
            // return $this->response->setJSON($sessiondata);
            session()->set($sessiondata);

           // return redirect()->to('dashboard');
           return $this->response->setJSON($sessiondata);
        else :
            echo "login gagal";
        endif;
    }
}
