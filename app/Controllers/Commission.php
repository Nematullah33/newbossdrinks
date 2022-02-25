<?php

namespace App\Controllers;

class Commission extends BaseController
{
    public function __construct(){

    }
    public function history(){
        echo view('erp/home');
        echo view("erp/pages/payout/commission_history");
        echo view("erp/footer");
    }

}
