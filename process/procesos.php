<?php

	require_once("BaseDatos.php");

	class procesos extends BaseDatos {
		public $msgOper;
		public $clase;


        public function login($usuario) {

			$query = "SELECT correo, contraseña FROM usuarios where correo = '$usuario'";
			
			$consulta = $this->consultar($query);

			return $consulta->fetch_object();	
        }

        public function verUsuario($usuario){

            $query = "SELECT * FROM usuarios WHERE correo = '$usuario'";
            
            $consulta = $this->consultar($query);

            return $consulta->fetch_object();   

        }

		public function index()
		{
			$query = "SELECT * FROM vistaUsuario ORDER BY id_usuario ASC";

			return $this->consultar($query);
		}

		public function cargarImagen()
		{
			$id 	 = $_REQUEST['id'];
			$revisar = getimagesize($_FILES["mi-archivo"]["tmp_name"]);

			if($revisar !== false)
		    {
	            $image = $_FILES["mi-archivo"]["tmp_name"];
	            $avatar = addslashes(file_get_contents($image));
			            
		        $query = "UPDATE usuarios SET imagen = '$avatar' WHERE id = '$id'";

	       	    if($this->consultar($query))
		       	{
		        	$this->msgOper = "Imagen de perfil cambiado correctamente";
		        	$this->clase = "alert-success";
		       	}
			    else
		        {
					$this->msgOper =  "Ha ocurrido un error al cargar la imagen, vuelva a intentarlo.";
		        	$this->clase = "alert-danger";
		        } 
			}
		}

		public function registrar()
		{
		    $nombre       = $_REQUEST["nombre"];
		    $area		  = $_REQUEST["area"];
			$turno	  	  = $_REQUEST["turno"];
			$estatus	  = $_REQUEST["estatus"];
		    $correo	      = $_REQUEST["correo"];
			$contraseña	  = $_REQUEST["contraseña"];
			$cuenta		  = $_REQUEST["cuenta"];

		    $query = "INSERT INTO usuario (nombre, areacargo, turno, estatus, correo, contraseña, cuenta) VALUES ('$nombre', '$area', '$turno', '$estatus', '$correo', '$contraseña', '$cuenta')";

		    if ($this->consultar($query)) {
		        $this->msgOper = "Usuario registrado";
		        $this->clase = "alert-success";
		    }else{
		        $this->msgOper =  "Ha ocurrido un error al registrar, vuelva a intentarlo.";
		        $this->clase = "alert-danger";
		    }
		}

		public function registrarAccidente()
		{
		    $nombre       = $_REQUEST["nombre"];
		    $desc         = $_REQUEST["descripcion"];
		    $turno		  = $_REQUEST["turno"];
		    $supervisor	  = $_REQUEST["supervisor"];
			$area	  	  = $_REQUEST["area"];
			$fecha        = $_REQUEST["fecha"];
			$hora         = $_REQUEST["hora"];


		    $query = "INSERT INTO registroaccidentes (nombre, descripcion, turno, supervisor, area, fecha, hora) VALUES ('$nombre', '$desc', '$turno', '$supervisor', '$area', '$fecha', '$hora')";

		    if ($this->consultar($query)) {
		        $this->msgOper = "Accidente registrado";
		        $this->clase = "alert-warning";
		    }else{
		        $this->msgOper =  "Ha ocurrido un error al registrar, vuelva a intentarlo.";
		        $this->clase = "alert-danger";
		    }
		}

		public function preModificar()
        {
            $id       = $_REQUEST["id"];

			$query = "SELECT * FROM vistaUsuario where id_usuario=$id;";

			$consulta = $this->consultar($query);

			return $consulta->fetch_object();
        }

   		public function preAreas()
        {
            $id       = $_REQUEST["id"];

			$query = "SELECT * FROM areaV where id_area=$id;";

			$consulta = $this->consultar($query);

			return $consulta->fetch_object();
        }

		public function modificar()
		{	
			$ids		  = $_REQUEST["id"];
			$nombre       = $_REQUEST["nombre"];
			$area    	  = $_REQUEST["area"];
			$turno		  = $_REQUEST["turno"];
			$estatus	  = $_REQUEST["estatus"];
			$correo       = $_REQUEST["correo"];
			$cuenta		  = $_REQUEST["cuenta"];


		    $query = "UPDATE usuario SET nombre = '$nombre', areacargo = '$area', turno = '$turno', estatus = '$estatus', correo = '$correo', cuenta = '$cuenta' WHERE id_usuario='$ids'";


		    if ($this->consultar($query)) {
		        $this->msgOper = "Datos guardados";
		        $this->clase = "alert-success";
		    }else{
		        $this->msgOper = "Ha ocurrido un error, reinténtelo más tarde";
		        $this->clase = "alert-danger";
		    }
		}

		public function modificarArea()
		{	
			$ids		  = $_REQUEST["id"];
			$nombre       = $_REQUEST["nombre"];
			$estatus	  = $_REQUEST["estatus"];

		    $query = "UPDATE area SET nombre = '$nombre', estatus = '$estatus' WHERE id_area='$ids'";


		    if ($this->consultar($query)) {
		        $this->msgOper = "Área modificada";
		        $this->clase = "alert-success";
		    }else{
		        $this->msgOper = "Ha ocurrido un error, reinténtelo más tarde";
		        $this->clase = "alert-danger";
		    }
		}	

		public function updateInfo()
		{	
			$ids		  = $_REQUEST["id"];
			$fecha 		  = $_REQUEST["fecha"];
			$primera	  = $_REQUEST["primera"];
			$segunda	  = $_REQUEST["segunda"];

		    $query = "UPDATE infcalidad SET primera = '$primera', segunda = '$segunda' WHERE fecha='$fecha' AND turno='$ids'";


		    if ($this->consultar($query)) {
		        $this->msgOper = "Datos guardados";
		        $this->clase = "alert-success";
		    }else{
		        $this->msgOper = "Ha ocurrido un error, reinténtelo más tarde";
		        $this->clase = "alert-danger";
		    }
		}

		/* Script respaldo */

		function respaldo($host, $usuario, $pasword, $nombreDeBaseDeDatos)
		{
		    set_time_limit(3000);
		    $tablasARespaldar = [];
		    $mysqli = new mysqli($host, $usuario, $pasword, $nombreDeBaseDeDatos);
		    $mysqli->select_db($nombreDeBaseDeDatos);
		    $mysqli->query("SET NAMES 'utf8'");
		    $tablas = $mysqli->query('SHOW TABLES');
		    while ($fila = $tablas->fetch_row()) {
		        $tablasARespaldar[] = $fila[0];
		    }
		    $contenido = "SET SQL_MODE = \"NO_AUTO_VALUE_ON_ZERO\";\r\nSET time_zone = \"+00:00\";\r\n\r\n\r\n/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;\r\n/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;\r\n/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;\r\n/*!40101 SET NAMES utf8 */;\r\n--\r\n-- Database: `" . $nombreDeBaseDeDatos . "`\r\n--\r\n\r\n\r\n";
		    foreach ($tablasARespaldar as $nombreDeLaTabla) {
		        if (empty($nombreDeLaTabla)) {
		            continue;
		        }
		        $datosQueContieneLaTabla = $mysqli->query('SELECT * FROM `' . $nombreDeLaTabla . '`');
		        $cantidadDeCampos = $datosQueContieneLaTabla->field_count;
		        $cantidadDeFilas = $mysqli->affected_rows;
		        $esquemaDeTabla = $mysqli->query('SHOW CREATE TABLE ' . $nombreDeLaTabla);
		        $filaDeTabla = $esquemaDeTabla->fetch_row();
		        $contenido .= "\n\n" . $filaDeTabla[1] . ";\n\n";
		        for ($i = 0, $contador = 0; $i < $cantidadDeCampos; $i++, $contador = 0) {
		            while ($fila = $datosQueContieneLaTabla->fetch_row()) {
		                //La primera y cada 100 veces
		                if ($contador % 100 == 0 || $contador == 0) {
		                    $contenido .= "\nINSERT INTO " . $nombreDeLaTabla . " VALUES";
		                }
		                $contenido .= "\n(";
		                for ($j = 0; $j < $cantidadDeCampos; $j++) {
		                    $fila[$j] = str_replace("\n", "\\n", addslashes($fila[$j]));
		                    if (isset($fila[$j])) {
		                        $contenido .= '"' . $fila[$j] . '"';
		                    } else {
		                        $contenido .= '""';
		                    }
		                    if ($j < ($cantidadDeCampos - 1)) {
		                        $contenido .= ',';
		                    }
		                }
		                $contenido .= ")";
		                # Cada 100...
		                if ((($contador + 1) % 100 == 0 && $contador != 0) || $contador + 1 == $cantidadDeFilas) {
		                    $contenido .= ";";
		                } else {
		                    $contenido .= ",";
		                }
		                $contador = $contador + 1;
		            }
		        }
		        $contenido .= "\n\n\n";
		    }
		    $contenido .= "\r\n\r\n/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;\r\n/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;\r\n/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;";

		    # Se guardará dependiendo del directorio, en una carpeta llamada respaldos
		    $carpeta = __DIR__ . "/../inicio/administracion/respaldo/respaldos";
		    if (!file_exists($carpeta)) {
		        if(!is_dir($carpeta))
		        {
		        	mkdir($carpeta);
		        }
		    }

		    # Calcular un ID único
		    $id = uniqid();

		    # También la fecha
		    $fecha = date("Y-m-d");

		    # Crear un archivo que tendrá un nombre como respaldo_2018-10-22_asd123.sql
		    $nombreDelArchivo = sprintf('%s/respaldo_%s_%s.sql', $carpeta, $fecha, $id);

		    #Escribir todo el contenido. Si todo va bien, file_put_contents NO devuelve FALSE
		    return file_put_contents($nombreDelArchivo, $contenido) !== false;
		}

		function fechaEspanol ($fecha) {
			  	
			  	$fecha = substr($fecha, 0, 10);
			  	$numeroDia = date('d', strtotime($fecha));
			  	$mes = date('F', strtotime($fecha));
			  	$anio = date('Y', strtotime($fecha));
				$meses_ES = array("Enero", "Febrero", "Marzo", "Abril", "Mayo", "Junio", "Julio", "Agosto", "Septiembre", "Octubre", "Noviembre", "Diciembre");
			  	$meses_EN = array("January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December");
			  	$nombreMes = str_replace($meses_EN, $meses_ES, $mes);
			  	return $numeroDia." de ".$nombreMes." de ".$anio;
			
		}

		function mesEspanol ($fecha) {
			  	
			  	$fecha = substr($fecha, 0, 10);
			  	$mes = date('F', strtotime($fecha));
			  	$anio = date('Y', strtotime($fecha));
				$meses_ES = array("Enero", "Febrero", "Marzo", "Abril", "Mayo", "Junio", "Julio", "Agosto", "Septiembre", "Octubre", "Noviembre", "Diciembre");
			  	$meses_EN = array("January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December");
			  	$nombreMes = str_replace($meses_EN, $meses_ES, $mes);
			  	return $nombreMes." del ".$anio;
			
		}




    }


?>