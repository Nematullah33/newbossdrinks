<?php

namespace App\Controllers;

class Site extends BaseController
{
    public function __construct(){
        helper('form');
        helper('email');
    }

    public function index($message="")
    {
        echo view("site/common/header");
        echo view("site/common/topbar");
        echo view("site/common/sidebar");
        echo view("site/common/main_topbar");
        echo view('site/index',["error"=>$message]);
        //echo view('site/index',["error"=>$message]);
        echo view("site/common/contract");
        echo view("site/common/newsletter");
        echo view("site/common/full_footer");
    }

    public function shop(){
        echo view("site/common/header");
        echo view("site/common/topbar");
        echo view("site/common/navbar");
        echo view("site/common/sidebar");
        echo view("site/shop");
        echo view("site/common/full_footer");
    }
    public function about(){
        echo view("site/common/header");
        echo view("site/common/topbar");
        echo view("site/common/navbar");
        echo view("site/common/sidebar");
        echo view("site/aboutus");
        echo view("site/common/full_footer");
    }
    public function appetiser(){
        echo view("site/common/header");
        echo view("site/common/topbar");
        echo view("site/common/navbar");
        echo view("site/common/sidebar");
        echo view("site/appetiser");
        echo view("site/common/full_footer");
    }
    public function my_account(){
        echo view("site/common/header");
        echo view("site/common/topbar");
        echo view("site/common/navbar");
        echo view("site/common/sidebar");
        echo view("site/my_account");
        echo view("site/common/full_footer");
    }

    public function energy_drink(){
        echo view("site/common/header");
        echo view("site/common/topbar");
        echo view("site/common/navbar");
        echo view("site/common/sidebar");
        echo view("site/energydrinks");
        echo view("site/common/full_footer");
    }
    public function aboutus(){

        echo view("site/aboutus");

    }
    public function uabout(){
        echo view("site/common/header");
        echo view("site/common/topbar");
        echo view("site/common/navbar");
        echo view("site/common/sidebar");
        echo view("site/aboutus_copy");
        echo view("site/common/full_footer");
    }
    public function sport_drinks(){
        echo view("site/common/header");
        echo view("site/common/topbar");
        echo view("site/common/navbar");
        echo view("site/common/sidebar");
        echo view("site/sport");
        echo view("site/common/full_footer");
    }
    public function bcca(){
        echo view("site/common/header");
        echo view("site/common/topbar");
        echo view("site/common/navbar");
        echo view("site/common/sidebar");
        echo view("site/bcca");
        echo view("site/common/full_footer");
    }
    
    public function stock_register(){
        echo view("site/common/header");
        echo view("site/common/topbar");
        echo view("site/common/navbar");
        echo view("site/common/sidebar");
        echo view("site/stock_register");
        echo view("site/common/full_footer");
    }
    public function brand(){
        echo view("site/common/header");
        echo view("site/common/topbar");
        echo view("site/common/navbar");
        echo view("site/common/sidebar");
        echo view("site/brand");
       // echo view("site/common/full_footer");
    }

    public function sport(){
        echo view("site/common/header");
        echo view("site/common/topbar");
        echo view("site/common/navbar");
        echo view("site/common/sidebar");
        echo view("site/sport");
        echo view("site/common/contract");
        echo view("site/common/newsletter");
        echo view("site/common/full_footer");
    }












    public function signup(){   
        $session=session();      
        $name=$this->request->getPost('username');
        $password=$this->request->getPost('password');
        $email=$this->request->getPost('email');
        $code=md5($email);

       //-------Validation goes here-------//
       $errors=[];
    
       if(!preg_match("/^[a-zA-Z]{2,}$/",$name)){ 
         $errors["username"]="Invalid Username";
       }   
 
       if(!preg_match("/^[a-zA-Z]+[a-zA-Z0-9]*[@][a-zA-Z0-9]+[.][a-z]{2,3}$/",$email)){              
         $errors["email"]="Invalid Email";       
       }  
 
       if(count($errors)){ 
        $session->setFlashdata(['errors'=>$errors]);
        return redirect()->to('/site/register');
       }
    
       //-----End Validation-------//

        $db = \Config\Database::connect();
        $sql = "INSERT INTO users (username,password,email,verify_code) VALUES ('$name', '$password', '$email','$code')";
        $db->query($sql);
        if($db->affectedRows()){
            //return redirect()->to("admin");
        $url=base_url()."/site/verify/$code";
        sendEmail($email,"Verify your email","To active your account please click the following link<br><a href='$url'> Click here to verify</a>","vergelogo.png");
        }
    }

    
    public function verify($code){         
        $db = \Config\Database::connect();
        $query=$db->query("update users set inactive=0 where verify_code='$code'");
        //   return redirect()->to("admin/dashboard");
        echo "Email is verified You can login Now!";
    }

}
