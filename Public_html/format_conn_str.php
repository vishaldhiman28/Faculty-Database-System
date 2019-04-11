<?php
 $con_str = oci_connect("LOGIN_ID", "PASSWORD", "SERVER/HOST_STRING");
 //$con_str = oci_connect("LOGIN_ID", "PASSWORD", "192.168.125.4/oracle10");
    if (!$con_str)
        {
       $err = oci_error();
       print("Coulnot connect");
	exit;
     }



?>
