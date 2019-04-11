<?php
 $con_str = oci_connect("Login ID", "Password", "SERVER:HOST String");
    if (!$con_str)
        {
       $err = oci_error();
       print("Coulnot connect");
	exit;
     }



?>
