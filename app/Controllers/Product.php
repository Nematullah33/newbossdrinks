<?php

namespace App\Controllers;

class Product extends BaseController
{
    public function __construct(){
        helper('form');
        helper('email');
    }
    public function index(){         
        echo view('erp/home');
        echo view("erp/pages/product/manage_product");
        echo view("erp/footer");
    }
    public function create(){         
        echo view('erp/home');
        echo view("erp/pages/product/create_product");
        echo view("erp/footer");
    }
    public function view(){         
        echo view('erp/home');
        echo view("erp/pages/product/view_product");
        echo view("erp/footer");
    }

}