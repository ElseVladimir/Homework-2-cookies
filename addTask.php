<?php
$tasks = [];
	if(!empty($_POST['add']))
	{
		if(isset($_COOKIE['tasks']))
		{
			$tasks = json_decode($_COOKIE['tasks'], true);
		}
			$tasks[] = 
			[
			'title' => $_POST['add'],
			'completed' => false
			];

		setcookie('tasks', json_encode($tasks), time()+3600*24);
		header('Location: index.php');
		die();
	}else{
	    die('Введите задачу');
    }