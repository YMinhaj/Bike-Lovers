<html>
<body>

<?php

$dbhandle = mysql_connect("localhost", "", "")
    or die("Unable to connect to MySQL");
echo "Connected to MySQL<br>";

$selected = mysql_select_db("test",$dbhandle)
    or die("Could not selected test");
echo "Connected to test<br>", "<br>";

$result = mysql_query("SELECT ID, F_Name, L_Name, Email FROM person1234");

while($row = mysql_fetch_array($result))
{
echo "<b>ID: </b>".$row{'ID'}." <b>Name: </b>".$row{'F_Name'}." <b>Last Name: </b>".$row{'L_Name'}."<b>Email-Add".$row{'Email'}. " <br>";
}

mysql_close($dbhandle);

?>

</body>
</html>          