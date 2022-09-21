<?php
  $con = mysql_connect("localhost","root","");
    if(!$con){
    	die("Could not connect:".mysql_error());
    }

    mysql_select_db("rabiuak",$con);

    $mysql = "INSERT INTO portfolio(Name, Email, Subject, Message) VALUES ('$_POST[yname]','$_POST[yemail]','$_POST[ysubject]','$_POST[ymessage]')";
    if (!mysql_query($mysql,$con)) {
    	die('Error:'.mysql_error());
    }
    echo "<h1>Your Message is Successfully Submitted</h1>";
    
    mysql_close($con);
?>
