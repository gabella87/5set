<?php
	$data = json_decode(file_get_contents("php://input"));
	$empid = mysql_real_escape_string($data->empid);
	$empname = mysql_real_escape_string($data->empname);
	$emplname = mysql_real_escape_string($data->emplname);
	$empmail = mysql_real_escape_string($data->empmail);

	msql_connect("sitedev.ipxon.net","tesis","tesis.2018");
	msql_select_db("tesis");
	msql_query("INSERT INTO prueba (`id`,`name`,`lastname`,`email`) VALUES ('".$empid."','".$empname."','".$emplname."','".$empmail."')");
?>
