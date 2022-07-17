<?php

class BaseDatos {

	private $mysqli;

	public function __construct()
	{
		$this->mysqli = new mysqli("localhost","root","","deepinMX");
		if(mysqli_connect_errno()) {
			printf("La conexión ha fallado");
		}
		$this->mysqli->set_charset("utf8");
	}

	public function consultar($query)
	{
		return $this->mysqli->query($query);
	}

	public function __destruct()
	{
		$this->mysqli->close();
	}
}

?>