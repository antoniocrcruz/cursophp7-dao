<?php 


class Sql extends PDO {

	private $conn;

	public function __construct() {

		$this->conn = new PDO("mysql:host=localhost;dbname=dbphp7", "root","");

	}

	private function setParams($statement, $parameters = array()){

		foreach ($parameters as $key => $value) {
			
			$this->setParam($statement, $key, $value);
		}	

	}

	private function setParam($statement, $key, $value){

		$statement->bindParam($key, $value);
	}

	public function query($rawQuery, $params = array()){

		$stmt = $this->conn->prepare($rawQuery);

		$this->setParams($stmt, $params);

		$stmt->execute();//neste ponto, você não está esperando dados de volta, apenas determinando que ele execute a query, se tivesse um select, aí sim precisaria

		return $stmt;//neste ponto, você não está esperando dados de volta, apenas determinando que ele execute a query, se tivesse um select, aí sim precisaria
		
		}

		public function select($rawQuery, $params = array()): array
		{

		$stmt = $this->query($rawQuery, $params);

		return $stmt->fetchAll(PDO::FETCH_ASSOC);

	}	

}

 ?>