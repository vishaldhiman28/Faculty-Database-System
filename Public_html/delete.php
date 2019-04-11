<?php
if($_POST['submit']){
	include("my_connect_str.php");
	print("!!! ...Connected successfully to the database ....!!!\n");

  $Name=$_POST['Name'];


  $stid=oci_parse($con_str,"select T.Name from TU_FACULTY T");
  //$r=oci_execute($stid);
  $stid1=oci_parse
	if(!$r)
	  {
		 print("\nProblem in the Query");
		 exit;
	  }
  $row = oci_fetch_array($stid, OCI_RETURN_NULLS+OCI_ASSOC);
	if($row==false)
	 {
		 print("\nNO RECORD FOUND FOR $Name");
		 exit;
	 }
	else {
	  print("\n Record Found");
	}
  print '<table border="1">';
	do  {
	   print '<tr>';

	   foreach ($row as $item) {
	      print '<td>'.($item?htmlentities($item):' ').'</td>';
	   }
	   print '</tr>';
	}while($row = oci_fetch_array($stid, OCI_RETURN_NULLS+OCI_ASSOC));
	print '</table>';
	print("<BR>\nQuery executed Successfully");

	oci_close($con_str);
}
?>

<?php require "templates/header.php"; ?>

<h2>Name of Faculty, to Delete the Data </h2>

<form method="post">
	<label for="Name">Name</label>
	<input type="text" name="Name" id="Name">
	<input type="submit" name="submit" value="View Result">
</form>

<a href="index.php">Back to home</a>

<?php include "templates/footer.php"; ?>
