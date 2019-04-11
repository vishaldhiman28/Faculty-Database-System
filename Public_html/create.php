<?php
if ($_POST['submit']) {
	include("my_connect_str.php");
	print("!!! ...Connected successfully to the database ....!!!\n");


  $Name=$_POST['Name'];
	$DOB=$_POST['DOB'];
	$DOJ=$_POST['DOJ'];
	$Sex=$_POST['Sex'];
	$Address=$_POST['Address'];
	$Dept=$_POST['Dept'];
	$UG=$_POST['UG'];
	$PG=$_POST['PG'];
	$PHD=$_POST['PHD'];
	$AOS=$_POST['AOS'];
	$PUBLT=$_POST['PUBLT'];
	$CONATD=$_POST['CONATD'];
	$CID=$_POST['CID'];
	$Cname=$_POST['Cname'];
	$ODTY=$_POST['ODTY'];

	$query_str1=oci_parse($con_str,"INSERT into TU_FACULTY values('$Name','$DOB','$DOJ','$Sex','$Address','$UG','$PG','$PHD','$AOS','$Dept')");
	$r1=oci_execute($query_str1);

	$query_str2=oci_parse($con_str,"INSERT into Publications values('$Name','$PUBLT')");
	$r2=oci_execute($query_str2);

	$query_str3=oci_parse($con_str,"INSERT into Conference_Attended values('$Name','$CONATD')");
	$r3=oci_execute($query_str3);

	$query_str4=oci_parse($con_str,"INSERT into Other_Duties values('$Name','$ODTY')");
	$r4=oci_execute($query_str4);

	$query_str5=oci_parse($con_str,"INSERT into courses values('$CID','$Cname')");
	$r5=oci_execute($query_str5);

	$query_str6=oci_parse($con_str,"INSERT into Courses_Taught values('$Name','$CID')");
	$r6=oci_execute($query_str6);
	if(!($r1&&$r2&&$r3&&$r4&&$r5&&$r6))
			{
				print("\nWoah....!!! Problem in the Query");
				exit;
			}
	print("\nData Added Successfully for $Name");

}
?>



<?php require "templates/header.php"; ?>
<h2>Add New Faculty Data</h2>

<form method="post">
	<h2>->Personal Informations</h2>
	<label for="Name">Name</label>
	<input type="text" name="Name" id="Name">
	<label for="DOB">Date Of Birth</label>
	<input type="text" name="DOB" id="DOB">
	<label for="DOJ">Date Of Joining</label>
	<input type="text" name="DOJ" id="DOJ">
	<label for="Sex">Sex</label>
	<input type="text" name="Sex" id="Sex">
	<label for="Address">Address</label>
	<input type="text" name="Address" id="Address">
  <h2>->Academic Informations</h2>
	<label for="Dept">Department</label>
	<input type="text" name="Dept" id="Dept">
  <h4>-->Qualification</h4>
	<label for="UG">Undergraduation</label>
	<input type="text" name="UG" id="UG">
	<label for="PG">Postgraduation</label>
	<input type="text" name="PG" id="PG">
	<label for="PHD">PHD(Yes/NO)</label>
	<input type="text" name="PHD" id="PHD">
	<label for="AOS">Area Of Specialization</label>
	<input type="text" name="AOS" id="AOS">
	<h4>----------------------------------</h4>
	<label for="PUBLT">Publications</label>
	<input type="text" name="PUBLT" id="PUBLT">
	<label for="CONATD">Conference Attended</label>
	<input type="text" name="CONATD" id="CONATD">
	<h4>-->Course Taught</h4>
	<label for="CID">Course ID</label>
	<input type="text" name="CID" id="CID">
	<label for="Cname">Course Name</label>
	<input type="text" name="Cname" id="Cname">
	<h4>-----------------------------------</h4>
	<label for="ODTY">Other Duties</label>
	<input type="text" name="ODTY" id="ODTY">
	<input type="submit" name="submit" value="Submit">
</form>

<a href="index.php">Back to home</a>

<?php include "templates/footer.php"; ?>
