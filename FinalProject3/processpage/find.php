<?php
	require_once('../database_credential.php');
	
//Database search function
function findone(  $value_1){

	$sql = "Select * from installation WHERE (id = :$field_1) order by is ASC ";

	$insert_array = array('id'=> $value_1);
	
	$stmt = $mysql->prepare($sql);
	
	$stmt->execute($insert_array);
	
	$result = $stmt->fetchAll();
	
	return $result;
	
}

function findall( ){
	
	$sql = "Select * from installation order by is ASC ";
	
    $stmt = $mysql->query($sql);
    	
	return $stmt;
	
}
?>