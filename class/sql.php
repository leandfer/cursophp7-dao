<?php 

	class Sql extends PDO{

		private $conn;

		public function __construct(){

			$this->conn = new PDO("mysql:host=localhost;dbname=dbphp7","root","235689");			                  

		}


		private function setParams($statmat,$parameters = array()){

			foreach ($parameters as $key => $value) {

				$this->setParam($Key,$value);

			}

		}


		private function setParam($statmat, $key, $value){

			$statmat->bindParam($key, $value);


		}

		public function query($rowQuery,$params = array()){

			$stmt = $this->conn->prepare($rowQuery);

			$this->setParams($stmt, $params);

			$stmt->execute();

			return $stmt;
			
	
		}

		public function select($rawQuery, $params = array()):array{

			$stmt = $this->query($rawQuery,$params);

			return $stmt->fetchALL(PDO::FETCH_ASSOC);

		}

	}

 ?>