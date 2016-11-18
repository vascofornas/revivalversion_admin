<?php
include "../config.php";

$id = $_POST['id'];

mysqli_query($link,"delete from members where id= '".$id."'");
if(mysql_error()){
	$result['error']=mysql_error();
	$result['result']=0;
}else{
	$result['error']='';
	$result['result']=1;
}
echo json_encode($result);

?>