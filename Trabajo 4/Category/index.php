<?php 
	include "../app/CategoryController.php";
	$CategoryController =new CategoryController();
		$categories = $CategoryController->get();

	echo json_encode($categories);
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Categories</title>
	<style type="text/css">
		}
		table, th, td{
			border: 1px solid black;
			border-collapse: collapse;
		}
	</style>
</head>
<body>
	<h1>
		Categories
	</h1>
	<div>
		<table>
			<thead>
				<th>
					#
				</th>
				<th>
					Name
				</th>
				<th>
					Description
				</th>	
			</thead>
			<?php 
				foreach ($categories as $category) {
					echo "
					<tr>
						<td>
							".$category["id"]."
						</td>
						<td>
							".$category["NAME"]."
						</td>
						<td>
							".$category["description"]."
						</td>
					</tr>";
				}
			 ?>
		</table>
		<form action="../app/CategoryController.php" method="POST">
			 	<fieldset>
			 		<legend>
			 			Add category
			 		</legend>
			 		<label>
			 			name
			 		</label>
			 		<input type="text" name="name" required="">
			 		<label>
			 			description
			 		</label>
			 		<textarea name="description" placeholder="write here" required=""></textarea>
			 		<label>
			 			status
			 		</label>
			 		<select name="status">
			 			<option>
			 				active
			 			</option>
			 			<option>
			 				inactive
			 			</option>
			 		</select>
			 		<button type="sumbit">Save Category</button>
			 		<input type="hidden" name="action" value="store">
			 	</fieldset>
			 </form>
	</div>
</body>
</html>