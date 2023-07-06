<?php

namespace App\Controllers;

class HelloWorld extends BaseController
{
    public function index()
    {
        return view ('helloworld');
    }
}
?>