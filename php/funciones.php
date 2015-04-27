<?PHP
	//CONEXION
	function conectar()
	{
		$base="guorpres";
		$host = "localhost";
		$user = "root";
		$pass = "";
		$enlace = mysqli_connect($host, $user, $pass, $base);
		//or die("Error al conectarse a la base de datos");
		if(isset($enlace))
		{
			return $enlace;
		}
		else{
			die($enlace);
		}

	}
	//DESCONEXION
	function desconectar()
	{
		mysqli_close($enlace);
	}
?>