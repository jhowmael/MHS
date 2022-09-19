<?php

namespace app\controller;

use app\core\Controller;

class BaseController extends Controller
{
    public function home()
    {

        $this->load('home/main', [
            'nome' => 'MHS'
]);
    }
}
