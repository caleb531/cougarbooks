<?php

// A wrapper class for interacting with the CougarBooks database
class Database {

	// private $host = 'localhost';
	// private $user = 'evans099'
	// private $password = 'evans099';
	// private $dbname = 'team2';

	private $dbh;
	private $error;

	// Connect to database upon instantiation
	function __construct($dbname, $user, $password) {
		$options = array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION);
		try {
			$this->dbh = new PDO( "mysql:host=localhost;dbname=$dbname", $user, $password, $options );
		} catch (PDOException $e) {
			$this->error = $e->getMessage();
		}

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

	// checks to see if user is an administrator
	public function isAdmin( $user_id ){
		$query = "SELECT is_admin
		FROM users
		WHERE user_id = :user_id";
		$admin = $db->fetchOne( $query, array(
			'user_id' => $user_id
		) );
		if ( $admin ) {
			return true;
		} else {
			return false;
		}
	}

	// get the row count of the last transaction
	public function rowCount(){
		return $this->stmt->rowCount();
	}

	// return the id of the last inserted row
	public function lastInsertId(){
		return $this->dbh->lastInsertId();
	}

}

$db = new Database('team2', 'evans099', 'evans099');

?>
