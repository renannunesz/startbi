<?php

namespace App\Controllers;

class Dashboard extends BaseController {

    public function index() {

        return view('dashboard');

    }

    public function testePrint() {

        $tsPrint = "Teste Controller Dashb";

        return $tsPrint;
    }

}