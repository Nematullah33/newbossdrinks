<?php

namespace App\Controllers;

class Payout extends BaseController
{
    public function __construct(){

    }
    public function index(){
        echo view("erp/home"); 
        echo view("erp/pages/payout/payout");           
        echo view("erp/footer");
    }
    public function history(){
        echo view("erp/common/header"); 
        echo view("erp/pages/payout/payout_history");           
        echo view("erp/common/footer");
    }
    public function payout_request(){
        echo view("erp/home"); 
        echo view("erp/pages/payout/payout_request");           
        echo view("erp/footer");
    }
    public function settings(){
        echo view("erp/home"); 
        echo view("erp/pages/payout/payout_setting");           
        echo view("erp/footer");
    }

}
