<?php
	if(isset($_POST['task_key']))
	{
		if(isset($_COOKIE))
		{
			$tasks = json_decode($_COOKIE['tasks'], true);
		}
				 $taskey = $_POST['task_key'];
				$tasks[$taskey]['completed']= true;

				setcookie('tasks', json_encode($tasks), time()+3600*24);
				header('Location: index.php');
				die();
	}

