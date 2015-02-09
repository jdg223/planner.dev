<?php 
var_dump($_POST);
 ?>
<html>
<head>
	<title>TODO List</title>
	<link href='http://fonts.googleapis.com/css?family=Open+Sans+Condensed:300' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" type="text/css" href="/todo.css">
	
</head>
<body>
	<h1>TODO List</h1>

		<ul>
			<li>Wash the car</li>
			<li>Clean the kitchen</li>
			<li>Walk the dog</li>
		</ul>


		<form method="POST" action="/todo_list.php">
			<p>
				<label for="todo_today">What else do you have to do today?</label>
				<input type="text" id="todo_today" name="todo_today">
				<input type="submit">
			</p>
		</form>

</body>
</html>

