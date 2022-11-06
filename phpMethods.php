<?php
function connect(){
    $servername = "localhost";
	$dbuser = "root";
	$dbpass = "Baguvix3206";
	$dbname = "group8db";
	$link=mysqli_connect($servername,$dbuser,$dbpass,$dbname) or die("Could not connect".mysqli_connect_error());
	return ($link);
}

function setData($sql){
	$link=connect();
	if (mysqli_query($link,$sql)) {
		return true;
	} else {
		echo("<script>
			alert('Error '".mysqli_error($link).");
			</script>");
		return false;
	}
}

function getData($sql){
	$link=connect();
	$result=mysqli_query($link,$sql);
	while ($row=mysqli_fetch_array($result,MYSQLI_ASSOC)) {
		$rows=$row;
		return $rows;
	}
}

function getDataRows($sql){
	$link=connect();
	$result=mysqli_query($link,$sql);
	while ($row=mysqli_fetch_array($result,MYSQLI_ASSOC)) {
		$rows[]=$row;
	}
	if(!empty($rows)){
		return $rows;
	}
}
 ?>
