<?php

namespace App\Controllers;

class Coupons extends BaseController
{
    public function __construct(){
        
    }
    public function index(){
        echo view('erp/home');
        echo view("erp/pages/coupons/manage_coupons");
        echo view("erp/footer");
    }
    public function create(){
        echo view('erp/home');
        echo view("erp/pages/coupons/create_coupons");
        echo view("erp/footer");
    }



}
