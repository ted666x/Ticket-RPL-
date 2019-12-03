<?php
$host='localhost';
$user='root';
$pass='';
$db='tiket';

$dbkonek= new mysqli("$host","$user","$pass","$db");

if ($dbkonek->connect_error) {
	echo"gagal konek";

}else{
	//echo"conected";
}

?>