<?php

namespace App\Controllers;

class Order extends BaseController
{
    public function __construct(){
        helper('form');
        helper('email');
    }
    public function index(){         
        echo view('erp/home');
        echo view("erp/pages/order/manage_order");
        echo view("erp/footer");
    }

    public function view(){
        echo view('erp/home');
        echo view("erp/pages/order/view_order");
        echo view("erp/footer");
    }


}
