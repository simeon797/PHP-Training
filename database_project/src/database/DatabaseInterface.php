<?php

namespace database;

interface DatabaseInterface {

	public function createTable(string $tableName) : bool;

	public function deleteTable(string $tableName) : bool;

	public function insertRecord(int $row) : bool;

	public function deleteRecord(int $row) : bool;

	public function showTables() : array;




}