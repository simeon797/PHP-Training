<?php

namespace database;


use PDO;

class DataBaseIndex implements DatabaseInterface {


	private static $instance = NULL;

	/**
	 * @var \PDO $conn
	 */
	private PDO $conn;

	/**
	 * @var string $host
	 */
	private string $host = 'localhost';

	private string $user = 'root';

	private string $password = 'root';

	private string $databaseName = 'project';


	private function __construct() {

		$dsn = "mysql:host={$this->host};dbname={$this->databaseName}";

		$this->conn = new PDO($dsn, $this->user, $this->password);

	}

	public static function getInstance() {

		if (!self::$instance) {
			self::$instance = new DataBaseIndex();
		}

		return self::$instance;

	}

	public function getConnection(): PDO {
		return $this->conn;
	}

	public function createTable(string $tableName): bool {

		$stmtCreate = "CREATE TABLE $tableName (
                         ID int NOT NULL,
                         LastName varchar(255) NOT NULL,
                         FirstName varchar(255) NOT NULL ,
                         PRIMARY KEY (ID)
		);";

		$checkIfTableExists = "select 1 from $tableName limit 1;";
		if (!$this->getConnection()->query($checkIfTableExists)) {
			$this->getConnection()->exec($stmtCreate);
			return TRUE;
		}
		return false;


	}

	public function deleteTable(string $tableName): bool {

		$stmtCreate = "drop table $tableName;";

		$checkIfTableExists = "select 1 from $tableName limit 1;";
		if ($this->getConnection()->query($checkIfTableExists)) {
			$this->getConnection()->exec($stmtCreate);
			return TRUE;
		}
		return false;

	}

	public function insertRecord(int $row): bool {

		$stmtCreate = "INSERT INTO Example (ID, LastName, FirstName) 
		VALUES ('1', 'Parker', 'Teodor')";

		$checkIfRowExists = "SELECT TOP 1 * FROM Persons";
		if (!$this->getConnection()->query($checkIfRowExists)) {
			$this->getConnection()->exec($stmtCreate);
			return TRUE;
		}
		return false;
	}

	public function showTables(): array {

		$stmt = 'show tables;';
		return $this->conn->query($stmt)->fetchAll(PDO::FETCH_NUM);

	}


	public function deleteRecord(int $row): bool {

		$stmtCreate = "DELETE FROM Example WHERE LastName='Parker'";

		$checkIfRowExists = "SELECT TOP 1 * FROM Persons";
		if (!$this->getConnection()->query($checkIfRowExists)) {
			$this->getConnection()->exec($stmtCreate);
			return TRUE;
		}
		return false;
	}


}

