<?php require'db_list.php'; 

// Make a MySQL Connection
mysql_connect($database_name = 'akirachix', $password = '', $username = 'root', $server = 'localhost') or die(mysql_error());
mysql_select_db("akirachix") or die(mysql_error());

// Retrieve all the data from the "example" table
$result = mysql_query("SELECT * FROM akirachix")
or die(mysql_error());  

// store the record of the "example" table into $row
$row = mysql_fetch_array( $result );
// Print out the contents of the entry 

echo "name: ".$row['name'];
echo "age: ".$row['age'];
echo "phone".$row['age'];

?>