<?php 
	$url = "mysql:host=localhost;dbname=practica";
	$user= "root";
	$pssword = "";
	try {
    	$pdo = new PDO($url, $user, $pssword);
    	//echo "Conexion exitosa";
	}
	catch (PDOException $e) {
    	echo "". $e->getMessage() ."";
	}
/*
class Conect_MySql {   
	 var $obj = array ( "dbname"	=>	"practica",
					   "dbuser"		=>	"root"		,
					   "dbpwd"		=>	""		,
					   "dbhost"		=>	"localhost"	);


	 var $q_id	="";
	 var $ExeBit	="";
	 var $db_connect_id = "";
	 var $query_count   = 0;
	private function connect(){
		$this->db_connect_id = mysqli_connect($this->obj['dbhost'],$this->obj['dbuser'],$this->obj['dbpwd'],$this->obj['dbname']);
		  $this->db_connect_id->set_charset("utf8");  
		  if (!$this->db_connect_id)
			  {
				echo (" Error no se puede conectar al servidor:".mysqli_connect_error());
		  }
    }

function execute($query) {       
		$this->q_id = mysqli_query($this->db_connect_id,$query);        
		if(!$this->q_id ) {
			$error1 = mysqli_error($this->db_connect_id);
			die ("ERROR: error DB.<br> No Se Puede Ejecutar La Consulta:<br> $query <br>MySql Tipo De Error: $error1");
		}         
	$this->query_count++; 
	return $this->q_id;    
	}
function runQuery($query) {
		$result = mysqli_query($this->db_connect_id,$query);
		while($row=mysqli_fetch_array($result)) {
			$resultset[] = $row;
		}
		if(!empty($resultset))
			return $resultset;
	}


  public function fetch_row($q_id = "") {
		if ($q_id == "") {
			$q_id = $this->q_id;
   	 	}
		$result = mysqli_fetch_array($q_id);
		return $result;
	}	

 public function get_num_rows() {
		return mysqli_num_rows($this->q_id);
	}

public function get_row_affected(){
	return mysqli_affected_rows($this->db_connect_id);
}

public	function get_insert_id() {
	return mysqli_insert_id($this->db_connect_id);
}

public  function free_result($q_id) {
   		if($q_id == ""){
			$q_id = $this->q_id;
		}
	mysqli_free_result($q_id);
	}	

public function close_db(){
		return mysqli_close($this->db_connect_id);
	}

public function more_result() {
		return mysqli_more_results($this->db_connect_id);
	}
public function next_result() {
		return mysqli_next_result($this->db_connect_id);
	}

  public function __construct(){
		$this->connect();
	}
	
	
	
}
*/
?>