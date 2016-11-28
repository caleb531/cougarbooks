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

	// execute generic query (returning row count)
	public function query( $query, $params ) {
		$sth = $this->dbh->prepare( $query );
		$sth->execute( $params );
		return $sth->rowCount();
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

	// Retrieve the attributes for the ad with the given ID
	public function get_ad( $ad_id ) {
		$query = 'SELECT * FROM ad WHERE ad_id = :ad_id';
		$ad = $this->fetchOne( $query, array(
			'ad_id' => $ad_id
		) );
		return $ad;
	}

	// return the id of the last inserted row
	public function lastInsertId(){
		return $this->dbh->lastInsertId();
	}

	public function sign_in( $email, $entered_password ){

		if(!empty($email) && !empty($entered_password)){
			$query = 'SELECT user_id, user_password, is_admin
			FROM user
			WHERE email_address = :email_address
			LIMIT 1';

			$user = $this->fetchOne( $query, array(
				'email_address' => $email
			) );

			if($user['user_password'] === hash( 'sha256', $entered_password . trim( $email ) ) ){
				$_SESSION['signed_in'] = true;
				$_SESSION['user_id'] = $user['user_id'];
				$_SESSION['is_admin'] = $user['is_admin'];
			} else {
				$_SESSION['signed_in'] = false;
			}
		}
	}

	// Return true if the currently-signed-in user can edit this ad; otherwise,
	public function allowed_to_edit_ad( $ad_id ) {
		if ( ! empty( $_SESSION['is_admin'] ) || empty( $ad_id ) ) {
			// If signed-in user is admin or if ad ID isn't given, allow user to
			// post ad
			return true;
		} else if ( ! empty( $ad_id ) ) {
			// Otherwise, ad ID is provided, check if ad was posted by signed-in
			// user

			$query = 'SELECT user_id FROM ad WHERE ad_id = :ad_id';
			$user = $this->fetchOne( $query, array(
				'ad_id' => $ad_id
			) );

			if ( $user['user_id'] === $_SESSION['user_id'] ) {
				return true;
			} else {
				return false;
			}

		}
	}

	// Retrieve the ads matching the given search keyword (supports pagination)
	public function get_ads_by_keyword( $keyword, $page = 0, $page_length = CB_PAGE_LENGTH ) {
		$query = "SELECT *
			FROM ad
			WHERE is_closed = 0
			AND (book_title LIKE :search
				OR book_author Like :search
				OR book_isbn Like :search
				OR ad_description Like :search)
			LIMIT " . ($page * $page_length) . ", " . $page_length;
		$ads = $this->fetchAll( $query, array(
	    	'search' => '%' . $keyword . '%'
		) );
		return $ads;
	}

	// Retrieve all ads for the given user (supports pagination)
	public function get_ads_by_user( $user_id, $page = 0, $page_length = CB_PAGE_LENGTH) {
		$query = "SELECT *
			FROM ad
			WHERE user_id = :user_id
			LIMIT " . ($page * $page_length) . ", " . $page_length;
		$ads = $this->fetchAll( $query, array(
			'user_id' => $user_id
		) );
		// Get all ads for this page except the last
		return $ads;
	}

}


$db = new Database('team2', 'evans099', 'evans099');

?>
