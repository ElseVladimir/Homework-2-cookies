<?php
	if(!empty($_POST['task_key']))
	{
		if(!empty($_COOKIE['tasks']))
		{
			$tasks = json_decode($_COOKIE['tasks'], true);
		}else{
		    die();
        }
		        $taskkey = $_POST['task_key'];
				$tasks[$taskkey]['completed']= true;
				
				setcookie('tasks', json_encode($tasks), time()+3600*24);
				header('Location: index.php');
				die();
	}else{
	    die();
    }

