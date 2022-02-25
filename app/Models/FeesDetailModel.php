<?php
namespace App\Models;
class FeesDetailModel{
	public $id;
	public $fees_id;
	public $fee_type_id;
	public $price;
	public $discount;

	function __construct($_id,$_fees_id,$_fee_type_id,$_price,$_discount){
		$this->id=$_id;
		$this->fees_id=$_fees_id;
		$this->fee_type_id=$_fee_type_id;
		$this->price=$_price;
		$this->discount=$_discount;
	}

	function save(){
		$db = \Config\Database::connect();
		$db->query("insert into fees_details(fees_id,fee_type_id,price,discount)values('$this->fees_id','$this->fee_type_id','$this->price','$this->discount')");
		return $db->insert_id;
	}
	public static function feeView($id){
        $db = \Config\Database::connect();
        $query=$db->query("select f.id,f.created_at,s.first_name,s.last_name,s.phone,t.name fee_type,fd.price from fee_type t,fees f,students s,fees_Details fd where s.id=f.student_id and fd.fee_type_id=t.id and f.id='$id'");
        $feesDetail=$query->getResult();      
        return $feesDetail;
    }
}

?>