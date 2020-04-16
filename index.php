<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>ToDo list</title>
</head>
<body>
	<?php $tasks = json_decode($_COOKIE['tasks'],true);?>
	<form method="post" action="addTask.php">
			<input type="textarea" name="add" placeholder="Введите задачу" required><br>
			<input type="submit" name="submit" value="Ввести"><br>
	</form>
		<table>
        <tr>
            <th>№</th>
            <th>Текст задачи</th>
            <th>Выполнена</th>
            <th>Отправить</th>
        </tr>
        <?php if(!empty($_COOKIE))
        {
        ?>
        <?php foreach($tasks as $taskkey => $task):?>
            <tr>
                 <td><?= $taskkey ?> </td>
                 <td><?= $task['title']?></td>
                 <td><?= $task['completed'];?></td>
                 <td>
             	<form method="post" action="completeTask.php">
                     <input type="hidden" name="task_key" VALUE="<?= $taskkey?>">
                     <button>Add</button>
    			</form>
                 </td>
            </tr>
            <?=var_dump($task[$taskkey]['completed']);?>
        <?php endforeach?>
        <?php
        }
        ?>

    	</table>
        
</body>
</html>