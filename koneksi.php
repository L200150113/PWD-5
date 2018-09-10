<?php
	session_start();
	error_reporting(E_ALL ^ E_NOTICE ^ E_DEPRECATED);
	mysql_connect('localhost','root','');
	mysql_select_db('project');
	?>