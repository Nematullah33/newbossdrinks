<?php

namespace App\Controllers;

class User extends BaseController
{
    public function __construct(){
        helper('form');
        helper('email');
    }
    public function index(){
        echo view("erp/common/header");
        echo view("erp/pages/user/view_user");           
        echo view("erp/common/footer");
    }
    public function create(){  
        $session=session();       
        echo view("erp/common/header");
        echo view('erp/common/sidebar');      
        echo view('erp/common/topbar'); 
        $errors=$session->getFlashdata('errors');
        echo view("erp/pages/create_user",["errors"=>$errors]);           
        echo view("erp/common/footer");
    }

}
