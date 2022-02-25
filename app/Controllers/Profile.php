<?php

namespace App\Controllers;

class Profile extends BaseController
{
    public function __construct(){
       
    }
    public function index(){         
        echo view('erp/home');
        echo view("erp/pages/profile/profile");
        echo view("erp/footer");
    }
}