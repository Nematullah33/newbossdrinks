<?php

namespace App\Controllers;

class Admin extends BaseController{
    public function __construct(){
        helper('form');
        helper('email');
        helper('log');
    }
    public function Auth(){
        helper("log");
        $name=$this->request->getPost('txtUsername');
        $password=$this->request->getPost('txtPassword');
        $db = \Config\Database::connect();
        $session=session();
        
        $r_user=$db->query("select inactive from users where username='$name'");     
        $status=$r_user->getRow(); 
    
        if(!isset($status->inactive)){      
         
          $tmp = [
            'msg'  => 'Account not found.',
            'uname' => $name,
            'upass' => $password,
            ];
            
            log_activity("LOGIN","Fail to Login: Account not found",date("Y-m-d H:i:s"));
            
            
            $session->setFlashdata($tmp);     
            
            
            return redirect()->to('/admin');
    
        }
    
        if($status->inactive==1){   
    
          $tmp = [
            'msg'  => 'Inactive Account. Verify account first.',
            'uname' => $name,
            'upass' => $password,
            ];
            
            log_activity("LOGIN","Fail to Login: Inactive Account",date("Y-m-d H:i:s"));
           
    
            $session->setFlashdata($tmp);          
            return redirect()->to('/admin');   
    
        }else{
    
            $query = $db->query("select id,username,email from users where username='$name' and password='$password'");
            $row = $query->getRow();       
    
            if(isset($row)){    
    
              //session data
              $udata = [
                'uid'=>$row->id,
                'username'  => $row->username,
                'email'     => $row->email,
                'logged_in' => true,
              ];
              
              log_activity("LOGIN","Successfully logged in user: $row->username",date("Y-m-d H:i:s"));
           
    
              $session->set($udata);
    
              return redirect()->to('/admin/dashboard');
          
            }else{
             
              $tmp = [
                'msg'  => 'Password or Username is invalid',
                'uname' => $name,
                'upass' => $password,
                ];
                
                log_activity("LOGIN","Fail to Login: Invalid username or password",date("Y-m-d H:i:s"));
           
    
                $session->setFlashdata($tmp);          
                return redirect()->to('/admin');
                
            }
    
      }
    }  
   public function signout(){
    $udata = ['uid','username','email','logged_in'];
    $session=session();
    $session->remove($udata);
    //log_activity("Signout","User : ".$udata->username,date("Y-m-d"));
    return redirect()->to("/admin");
   }

    // public function index(){ 

    //     $session=session();      

    //     $msg=$session->getFlashdata('msg');//1. Account not exists, 2. Account Inaction 3. Username or password incorrect
    //     $uname=$session->getFlashdata('uname');
    //     $upass=$session->getFlashdata('upass');

    //     if(isset($msg)){
    //     return view("erp/index",["msg"=>$msg,"uname"=>$uname,"upass"=>$upass]);
    //     }else{
    //     return view("erp/index");
    //     }
    // }
    public function index(){

        echo view("erp/common/header");
        echo view("erp/pages/user/create_user");
        echo view("erp/common/footer");
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
    public function dashboard(){       
        echo view("erp/common/header");
        echo view('erp/common/sidebar');      
        echo view('erp/common/topbar');      
        echo view('erp/dashboard');           
        echo view("erp/common/footer");
    }
    public function blank(){       
        echo view("erp/common/header");
        echo view('erp/common/sidebar');      
        echo view('erp/common/topbar');           
        echo view('erp/common/blank');      
        echo view("erp/common/footer");
    }
    public function register(){       
        $session=session(); 
        $errors=$session->getFlashdata('errors');
        echo view("erp/pages/register",["errors"=>$errors]);

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

    
   
}
