<?php


function get_agencia($agencia){

	
	$mysqli = new mysqli('localhost', 'revivcu6', 'bZsW4T^vbGj$', 'revivcu6_revival');

	$loop = mysqli_query($mysqli, "SELECT * FROM tb_agencias WHERE id_agencia = '".$agencia."'")
	or die (mysqli_error($mysqli));



	//display the results
	while ($row_usua = mysqli_fetch_array($loop))
	{
		$nombre = $row_usua['nombre_agencia'];
	}
	return $nombre;

}

?>
  
                        