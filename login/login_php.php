<?php

if($_POST){
      $con =mysql_connect("localhost", "root", "261994akk");
        mysql_select_db("teedb");
        mysql_query ("set character_set_results='utf8'");

        if (!$con)
                echo "Cannot connect: ".mysql_error();
        else{
                mysql_select_db("root", $con);
                mysql_query ("set character_set_results='utf8'");
        }
                

	$user	= filter_var($_POST["user"], FILTER_SANITIZE_STRING);
    $pass		= filter_var($_POST["pass"], FILTER_SANITIZE_STRING);
	$choise		= filter_var($_POST["choise"], FILTER_SANITIZE_STRING);
    $row=false;
    $row1=false;
    
    if($choise=="true"){
        $sql1 = mysql_query("SELECT Distinct U.* FROM `UsersTee` U WHERE U.Username='".$user."' and U.Pass='".$pass."'",$con); 
        $row1 = mysql_fetch_array($sql1);
    }else{
         $sql = mysql_query("SELECT Distinct * FROM `Users` WHERE Users.Username='epapak02' and Users.Password='IrenePa2'",$con);
         $row = mysql_fetch_array($sql);
   
    }
    
    if ($row or $row1) {
        $message="ok";
    } 
  else{
        $message="no" ;  
  }
    $output = json_encode(array('message'=>$message));
    die($output);
	$con->close(); 
}

?>