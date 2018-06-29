<?php
	session_start();
	$nama = $_SESSION["username"] ; 
	echo "$nama";