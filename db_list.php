<?php
// Make a MySQL Connection
mysql_connect($database_name = 'akirachix', $password = '', $username = 'root', $server = 'localhost') or die(mysql_error());
mysql_select_db("akirachix") or die(mysql_error());

// put some data of friends.
mysql_query("INSERT INTO akirachix(name, age,phone) VALUES('Loice', '21','0713248971' ) ") 
or die(mysql_error());  

mysql_query("INSERT INTO akirachix(name, age,phone) VALUES('Agness', '19','0714890667' ) ") 
or die(mysql_error());  

mysql_query("INSERT INTO akirachix(name, age,phone) VALUES('Ekra', '22','0714890667' ) ") 
or die(mysql_error());  

mysql_query("INSERT INTO akirachix(name, age,phone) VALUES('Sharon', '20','0712925802' ) ") 
or die(mysql_error()); 

mysql_query("INSERT INTO akirachix(name, age,phone) VALUES('Sharon', '20','0712925802' ) ") 
or die(mysql_error());   

echo "Data Inserted!";

?>