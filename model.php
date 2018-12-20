<?php
require_once('database.php');
class CrudOperation extends Database{
	public function insert($table, $data){
		$sql = "";
		$sql .= "INSERT INTO ".$table." (".implode(", ", array_keys($data)).") VALUES ('".implode("', '", array_values($data))."')";
		$query = mysqli_query($this->con, $sql);
		if ($query) {
			return true;
		}
	}
}
$obj = new CrudOperation;

if (isset($_POST['name'])) {
	$data = [
				'name'  =>$_POST['name'],
				'phone' =>$_POST['phone'],
				'email' =>$_POST['email']
			];
	if($obj->insert('contact_form',$data)){
		echo 'Data saved successfully';
	  }
	  else{
	  	echo 'Failed to save data';
	  }		
}