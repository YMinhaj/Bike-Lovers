

<?php
 if ($_POST['submit']){
	
  //need to request post vars here
   $Email=mysql_real_escape_string($_POST['Email']); 
  $F_Name=mysql_real_escape_string($_POST['F_Name']);
  $L_Name=mysql_real_escape_string($_POST['L_Name']);

    
	//database  connection
$db = mysql_connect("localhost", "","");
//selection  of  database
	    mysql_select_db("test",$db);
//select the table for insertion
    $sql = "INSERT INTO person1234 (F_Name, L_Name, Email) VALUES('$F_Name','$L_Name','$Email')";
	//echo $sql;

//run the query and identify the error
    mysql_query($sql) or die(mysql_error()."<br />".$sql);

    echo "Thanks! Data received and entered.\n";

}

?>
