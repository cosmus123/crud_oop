<?php require_once "connect.php"; ?>

<?php

class Database extends Connection {

    public function escape_string($var){
        $return = mysqli_real_escape_string($this->connection, $var);
        return $return;
    }

    public function create($fname,$lname,$email,$gender,$age){
        $query = "INSERT INTO crud (first_name,last_name,email_id,gender,age) VALUES ('{$fname}', '{$lname}', '{$email}', '{$gender}', '{$age}') ";
        $query_insert_data = mysqli_query($this->connection, $query);
        if($query_insert_data){
             return true;
        }else{
            return false;
        }
    }

    public function read(){
        $query = "SELECT * FROM crud ";
        $query_select = mysqli_query($this->connection, $query);
        return $query_select;
    }

    public function read_id($id){
        $query = "SELECT * FROM  crud WHERE id=$id ";
        //if($id){ $sql .= " WHERE id=$id";}
        $query_select_id = mysqli_query($this->connection, $query);
        return $query_select_id;
    }

    public function update($id,$fname,$lname,$email,$gender,$age){
        $query = "UPDATE crud SET first_name='$fname',last_name='$lname',email_id='$email',gender='$gender',age='$age' WHERE id=$id  ";
        $query_update = mysqli_query($this->connection, $query);
        if($query_update){
            return true;
        }else{
            return false;
        }
    }

    public function delete($id){
        $query = "DELETE FROM crud WHERE id=$id ";
        $query_delete = mysqli_query($this->connection, $query);
        if($query_delete){
            return true;
        }else{
            return false;
        }
    }

}

$database = new Database();

?>