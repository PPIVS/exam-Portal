<?php

namespace App\Controllers;


class Home extends BaseController
{
    public function studentLogin()
    {

        return view('StudentLogin');
    }

    public function stdtReg()
    {
        return view('StudentReg');
    }



    
}
