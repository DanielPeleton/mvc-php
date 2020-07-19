<?php
class db{
	public static $host = '';
	public static $user = '';
	public static $pass = '';
	public static $dbName = '';

	private function connect(){
		$con = mysqli_connect($host, $user, $pass, $dbName);

		return $con;
	}

	public function query($query, $param = array()){
		if(explode(' ', $query)[0] == 'SELECT'){
			$stmt = self::connect()->query($query);
			$result = $stmt->fetch_all(MYSQLI_ASSOC);
			return $result; 
		}else{
			$stmt = self::connect()->prepare($query);
			$stmt->execute();
		}
	}
}