<?php

namespace App\Controllers;

class Logs extends BaseController
{
    public function __construct(){
        helper('form');

    }
	public function manage(){         
        echo view("erp/common/header");
        echo view("erp/common/sidebar");  
        echo view("erp/common/topbar");      
        $db = \Config\Database::connect();  
        $query=$db->query("select * from system_log ORDER BY id DESC");
        $log=$query->getResult();

        echo view("erp/pages/system_log/manage_log",["logs"=>$log]);
        echo view("erp/common/footer");
		
	}


}
