<?php

namespace App\Controllers;

use App\Models\DashboardModel;
use App\Models\UsuarioModel;

class Login extends BaseController
{

    private $usuarioModel;
    private $dashboardModel;

    public function __construct()
    {

        $this->usuarioModel = new UsuarioModel();
        $this->dashboardModel = new DashboardModel();
    }

    public function index()
    {
        return view('login');
    }

    public function signIn()
    {
        //$mbl = $this->isMobile();

        $usuario = $this->request->getPost('inputUsuario');
        //dd($usuario);
        $senha = $this->request->getPost('inputSenha');

        $dadosUsuario = $this->usuarioModel->where('nome', $usuario)->first();

        if (is_null($dadosUsuario)) {

            session()->setFlashdata('msg', 'Usuário Invalido!');

            return redirect('Login');
            
        } else {

            if ($senha == $dadosUsuario['senha']) {

                $linkUsuario = $this->dashboardModel->where('cod_empresa', $dadosUsuario['cod_empresa'])->first();
                //dd($linkUsuario['link']);

                //session()->set('Mobile', $mbl);
                session()->set('Logado', true);
                session()->set('nome', $dadosUsuario['nome']);
                session()->set('link', $linkUsuario['link']);

                return redirect('Home');

            } else {

                session()->setFlashdata('msg', 'Senha Invalida!');

                return redirect('Login');
            }
            
        }

    }

    public function signOut()
    {
        session()->set('Logado', false);
        return redirect('Login');
    }

    /* DESUSO */

    /*
    public function isMobile() 
    {

        $is_mobile = false;
 
        //Se tiver em branco, não é mobile
        if ( empty($_SERVER['HTTP_USER_AGENT']) ) {
            $is_mobile = false;
 
        //Senão, se encontrar alguma das expressões abaixo, será mobile
        } elseif ( strpos($_SERVER['HTTP_USER_AGENT'], 'Mobile') !== false
            || strpos($_SERVER['HTTP_USER_AGENT'], 'Android') !== false
            || strpos($_SERVER['HTTP_USER_AGENT'], 'Silk/') !== false
            || strpos($_SERVER['HTTP_USER_AGENT'], 'Kindle') !== false
            || strpos($_SERVER['HTTP_USER_AGENT'], 'BlackBerry') !== false
            || strpos($_SERVER['HTTP_USER_AGENT'], 'Opera Mini') !== false
            || strpos($_SERVER['HTTP_USER_AGENT'], 'Opera Mobi') !== false ) {
                $is_mobile = true;
 
        //Senão encontrar nada, não será mobile
        } else {
            $is_mobile = false;
        }
        return $is_mobile;
    }
    */
}
