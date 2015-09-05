<?php

	class Obat
	{
		private $db;

		function __construct($database)
		{
			$this->db = $database;
		}

		public function insertDataObat($namaobat, $jenis, $harga, $stock)
		{
			$query = "INSERT INTO obat (namaobat, jenis, harga, stock) 
						VALUES (:namaobat, :jenis, :harga, :stock)";
			$result = $this->db->prepare($query);
			$result->bindParam(':namaobat', $namaobat);
			$result->bindParam(':jenis', $jenis);
			$result->bindParam(':harga', $harga);
			$result->bindParam(':stock', $stock);
			$result->execute();

		}

		public function getDataObat()
		{
			$query = "SELECT * FROM obat";
			$result = $this->db->prepare($query);
			$result->execute();
			return $result->fetchAll();
		} 

		public function updateDataObat($idobat, $namaobat, $jenis, $harga, $stock)
		{
			$query = "UPDATE obat SET namaobat=:namaobat, jenis=:jenis, harga=:harga, stock=:stock WHERE idobat=:idobat";
			$result = $this->db->prepare($query);
			$result->bindparam(':namaobat', $namaobat);
			$result->bindparam(':jenis', $jenis);
			$result->bindparam(':harga', $harga);
			$result->bindparam(':stock', $stock);
			$result->bindparam(':idobat',$idobat);
			$result->execute();
		}

		public function getId($idobat)
		{
			$result= $this->db->prepare("SELECT * FROM obat WHERE idobat=:idobat");
			$result->execute(array(":idobat"=>$idobat));
			$editRow=$result->fetch(PDO::FETCH_ASSOC);
			return $editRow;
		}
		public function deleteObat($idobat)
		{
		$stmt = $this->db->prepare("DELETE FROM obat WHERE idobat=:idobat");
		$stmt->bindparam(":idobat",$idobat);
		$stmt->execute();
		return true;
		}

	}

?>