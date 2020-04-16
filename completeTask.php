<?php
	if(isset($_POST['task_key']))
	{
		if(isset($_COOKIE))
		{
			$tasks = json_decode($_COOKIE['tasks'], true);
		}
				$tasks[0]['completed']= true;

				setcookie('tasks', json_encode($tasks), time()+3600*24);
				var_dump($tasks);
				var_dump($taskkey);
				die();
	}

