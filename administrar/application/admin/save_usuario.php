<?php
include "../config.php";

$id = $_POST['id'];
$nombre = $_POST['nombre'];
$apellidos = $_POST['apellidos'];
$nivel_usuario = $_POST['nivel_usuario'];


$email = $_POST['email'];
$tel = $_POST['tel'];
$verified = $_POST['verified'];
$newid = uniqid(rand(), false);
$crud=$_POST['crud'];

if($crud=='N'){
	
	mysqli_query($link,"insert into members(id,nombre,apellidos,nivel_usuario,email,verified,tel) values('$newid','$nombre','$apellidos','$nivel_usuario','$email','$verified','$tel')");
	if(mysql_error()){
		$result['error']=mysql_error();
		$result['result']=0;
	}else{
		$result['error']='';
		$result['result']=1;
	}
}else if($crud == 'E'){
	mysqli_query($link,"update members set nombre='$nombre',apellidos='$apellidos',nivel_usuario='$nivel_usuario',email='$email',verified='$verified',tel='$tel' where id= '".$id."'");
	if(mysql_error()){
		$result['error']=mysql_error();
		$result['result']=0;
	}else{
		$result['error']='';
		$result['result']=1;
	}
}else{

	$result['error']='Invalid Order';
	$result['result']=0;
}
$result['crud']=$crud;
echo json_encode($result);

?>