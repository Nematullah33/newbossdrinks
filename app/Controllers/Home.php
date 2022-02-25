<?php

namespace App\Controllers;

class Home extends BaseController{

    public function __construct(){
        helper('form');
    }
   public function Auth(){

        $name=$this->request->getPost('txtUsername');
        $password=$this->request->getPost('txtPassword');

        $db = \Config\Database::connect();
        $query = $db->query("select id,username,email from users where username='$name' and password='$password'");
        $row = $query->getRow();
    
       if(isset($row)){

          //return $this->dashboard();
          return redirect()->to("home/dashboard");
       
        }else{
            return $this->index("Password or Username is invalid");
        }


   }

    public function index($message="")
    {
       // echo view("header");
        echo view('erp/home',["error"=>$message]);
        echo view("erp/dashboard");
        echo view("erp/footer");
    }
    
    public function dashboard(){       
        echo view("header");
        echo view('sidebar');      
        echo view('topbar');      
        echo view('pages/dashboard');           
        echo view("footer");
    }
    public function blank(){       
        echo view("header");
        echo view('sidebar');      
        echo view('topbar');           
        echo view('blank');      
        echo view("footer");
    }




    public function about(){
        echo view("header");
        echo view('nav');
        echo view('about');

        $db = \Config\Database::connect();
        $query=$db->query("select * from about");
        $result=$query->getResult(); 

        echo view('about',["result"=>$result]);
        echo view("footer");
    }

    public function  default(){
        echo "File not found";
    }
    public function _remap($method,$params=array()){
        if($method=="index" || $method=="auth"){
            return $this->$method($params);
        }else{
            if(!session()->has('uid')){
                return redirect()->to("/admin"); 
            }
        }
        return $this->$method($params);
    }
   
}
