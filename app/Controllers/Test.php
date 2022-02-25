<?php

namespace App\Controllers;

class Test extends BaseController
{

   
   public function Auth(){

        $name=$this->request->getPost('txtUsername');
        $password=$this->request->getPost('txtPassword');

        $db = \Config\Database::connect();
        $query = $db->query("select id,username,email from users where username='$name' and password='$password'");
        $row = $query->getRow();
    
       if(isset($row)){

          return $this->home();
       
        }else{
            return $this->index("Password or Username is invalid");
        }


   }

    public function index($message="")
    {
        echo view("header");
        echo view('index',["error"=>$message]);
        echo view("footer");
    }
    
    public function home(){       
        echo view("header");
        echo view('nav');      
        echo view('home');
         //https://codeigniter4.github.io/userguide/database/examples.html
        
         $db = \Config\Database::connect();

         $query=$db->query("select * from users");
         $results=$query->getResult();

         foreach ($results as $row) {
             echo $row->username;           
             echo $row->password;
             echo $row->email;
             echo "<br>";
         }

        echo view("footer");
    }

    public function about(){
        echo view("header");
        echo view('nav');
        echo view('about');
        echo view("footer");
    }

    public function managetable(){       
        echo view("header");
        echo view('sidebar');      
        echo view('topbar');           
        echo view('pages/manage_table');      
        echo view("footer");
    }

    public function  default(){
        echo "File not found";
    }
    
   
}
