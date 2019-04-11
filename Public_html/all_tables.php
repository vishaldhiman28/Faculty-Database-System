<?php
include("my_connect_str.php");
print(">>>Connected successfully to the database ");

$query_str=oci_parse($con_str,"select * from tab");
if(!oci_execute($query_str))
	{
		print("Problem in the Query");
		exit;
	}

while($query_data=oci_fetch_array($query_str))
{
	print("<BR>");
for($i=0;$i<count($query_data);$i++)
	print("-- $query_data[$i]");
}
print("<BR>Query executed Successfully");


?>
