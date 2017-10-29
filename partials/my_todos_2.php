<?php
				foreach($data as $dat){
				echo $dat['createdBy'] . '.' ;
				echo $dat['title'] . '<br>' ; ?>
				
			
				<form action="partials/done.php" method="POST">
					<input type="hidden" name="done" value="<?= $dat["id"]; ?> ">
				<input type="submit" value="done">
    	 </form>
 			
			
				<form action="partials/delete.php" method="POST">
					<input type="hidden" name="delete" value="<?= $dat["id"]; ?> ">
				<input type="submit" value="Delete">
    	 </form>
 			<?php } 
			?>
			