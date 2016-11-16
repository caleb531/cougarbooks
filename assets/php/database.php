<?php

// A wrapper class for interacting with the CougarBooks database
class Database {

	// Connet to database upon instantiation
	function __construct($dbname, $user, $password) {
		$this->dbh = new PDO( "mysql:host=localhost;dbname=$dbname", $user, $password );
	}

	// Close connection to database
	public function close() {
		$this->db = null;
	}

	// Fetches a single result (represented as an associative array)
	public function fetchOne( $query, $params ) {
		$sth = $this->dbh->prepare( $query );
		$sth->execute( $params );
		return $sth->fetch(PDO::FETCH_ASSOC);
	}

	// Fetches a sequential array of results
	public function fetchAll( $query, $params ) {
		$sth = $this->dbh->prepare( $query );
		$sth->execute( $params );
		return $sth->fetchAll(PDO::FETCH_ASSOC);
	}

}

$db = new Database('team2', 'evans099', 'evans099');

?>
