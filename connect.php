<?php

class Connection {

    public $connection;

	public function connect_db(){
		$this->connection = mysqli_connect('localhost', 'cosminmus', 'cosmin123', 'crud_oop');
		if(mysqli_connect_errno()){
			die("Database Connection Failed" . mysqli_connect_error() . mysqli_connect_errno());
		}
	}
 
    function __construct(){
        $this->connect_db();
    }

}

$connected_db = new Connection();

?>