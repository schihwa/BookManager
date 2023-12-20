<?php // connect.php allows connection to the database
  	$hn='mysql';
	$db = '23db080';
	$un = '23usr080';
	$pw = 'eVdDnA9ipwjc';
	$conn = new mysqli($hn, $un,$pw,$db);
	include 'createTable.php';

