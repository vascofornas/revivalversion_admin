<?php
include "../config.php";
$query=mysqli_query($link,"SELECT @rownum := @rownum + 1 AS urutan,t.*,r.* FROM members t , (SELECT @rownum := 0) r") ;
$data = array();
while($r = mysqli_fetch_assoc($query)) {
	$data[] = $r;
}
$i=0;
foreach ($data as $key) {
		// add new button
	$data[$i]['button'] = '<button type="submit" id="'.$data[$i]['id'].'" class="btn btn-primary btnedit" ><i class="fa fa-edit"></i></button> 
							   <button type="submit" id="'.$data[$i]['id'].'" nombre="'.$data[$i]['nombre'].'" class="btn btn-primary btnhapus" ><i class="fa fa-remove"></i></button>';
	$i++;
}
$datax = array('data' => $data);
echo json_encode($datax);
?>