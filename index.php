<?php

require 'partials/header.php';
require 'partials/database_pdo.php';//PDO

?>





	<div class="container_form">
		<form action="partials/input.php" method="POST">
			Created By: <input type="text" name="createdBy" required> New todo: <input type="text" name="todo" required>
			<button type="submit">Submit</button>
		</form>

		<div class="todo">
			<h3>My Todos</h3>

			<?php 
		 if (isset($_GET["result"])) {
        echo "We added a new todo! whoooop";
    } else {
        echo "";
    }
			require 'partials/fetch_all.php'; 
			require 'partials/my_todos.php';
			?>
		</div>
	</div>
	<!-todo END--->

	<div class="container_form">

		<div class="todo">
			<h3>Completed todos</h3>
			
			<?php
	foreach($completed as $complete){
		
		echo $complete['createdBy'] . ' ' ;
		echo $complete['title'] . '<br>' ; 
		}
	
?>
		</div>

	</div>


	<?php 	
	echo '<pre>';
		print_r($data);
	echo '</pre>';
?>

	<h1>completed</h1>





	<?php require 'partials/footer.php'; ?>