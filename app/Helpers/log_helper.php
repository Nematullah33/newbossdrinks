<?php


	function log_activity($name,$description,$created_at){
		$db = \Config\Database::connect();
		$db->query("insert into system_log(name,description,created_at)values('$name','$description','$created_at')");
		return $db->insert_id;
	}
