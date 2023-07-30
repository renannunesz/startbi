<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        if (session()->Logado == true) 
        {
            return view('home');

        } else {

            return redirect('Login');
            
        }
    }

}
