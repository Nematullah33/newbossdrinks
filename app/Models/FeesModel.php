<?php

namespace App\Models;

//use CodeIgniter\Model;

class FeesModel
{
	public $id;
	public $student_id;
	public $created_at;
	public $note;
   

    function __construct($_id,$_student_id,$_created_at,$_note){
		$this->id=$_id;
		$this->student_id=$_student_id;
		$this->created_at=$_created_at;
		$this->note=$_note;
	}

    public function save(){
        $db = \Config\Database::connect();
        $db->query("insert into fees(student_id,created_at,note)values('$this->student_id','$this->created_at','$this->note')");
             
        return $db->insertID();
    }
    public static function manage(){
        $db = \Config\Database::connect();
        $query=$db->query("select s.id std_id,f.id,f.created_at,s.first_name,s.last_name,s.phone from fees f,students s where s.id=f.student_id");
        $fees=$query->getResult();      
        return $fees;
    }

    public static function delete($id){
       $db->query("delete from fees where id='$id'");
       $db->query("delete from fees_details where order_id='$id'");       
       return 1;
    }

   
    public function get_order($id){
        $query=$db->query("select * from fees where id='$id'");        
        return $query->getRow();
     }

     public function get_details($id){
        $query=$db->query("select * from fees_details where order_id='$id'");        
        return $query->getResult();
     }

     static function getLastOrderId(){
        $db = \Config\Database::connect();
		$result=$db->query("select max(id) count from fees");
		$row=$result->getRow();
        return $row->count;
	}



}