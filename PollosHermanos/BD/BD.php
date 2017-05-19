<?PHP
class ClBD{
	
	private static $BD;
	private $conn;
	
	private function ClBD (){
		$this->conn = mysqli_connect("localhost","root","","polloshermanos");
		$acentos = $this->conn->query("SET NAMES 'utf8'");
		if (!$this->conn) {
			$e = mysqli_error();
			trigger_error(htmlentities($e['message'], ENT_QUOTES), E_USER_ERROR);
		}
	}
	
	public static function getInstance(){
		if (ClBD::$BD == null){
			ClBD::$BD = new ClBD();
		}
		return ClBD::$BD;
	}
	
	public function sqlExecute($sql){
		mysqli_query($this->conn, $sql); 
		//mysqli_close($this->conn);
	}
	
	public function sqlSelectTodas($sql){
		
	   $resultado = mysqli_query($this->conn,$sql);
	   while($row=mysqli_fetch_array($resultado)){
	      $filas[]=$row;
	   }
	   mysqli_free_result($resultado);
	   return $filas;
	}
}
?>