<?php
require_once dirname(__FILE__)."/../config-php";

class BaseDao {

  public function __consturct(){
    $servername = "localhost";
  $username = "ademirson";
  $password = "ademir299";

  try {
    $conn = new PDO("mysql:host=$servername;dbname=mysql", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connected successfully";
  } catch(PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
  }
}
public function insert(){


}
public function update(){



}
public function query(){


}
public function query_unique(){


  }
}
?>
