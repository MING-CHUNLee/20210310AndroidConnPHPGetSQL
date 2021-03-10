<?php
  require_once("DBconn.php");
  $query="select username, password from usertable where username=:username";
  $stmt=$db_link->prepare($query);
  $stmt->bindparam(":username",$_POST["username"]);
  $stmt->execute();

  $result=$stmt->fetch(PDO::FETCH_ASSOC);
  $username=$result["username"];
  $passwd=$result["password"];
  $stmt->db=null;
  echo $username;


?>