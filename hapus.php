<?php
	include("koneksi.php");
	$id = $_GET['id'];
	mysql_query("DELETE FROM tbbarang where id='$id'")or die(mysql_error());
	
	header("location:tabel.php?pesan=hapus");
?>