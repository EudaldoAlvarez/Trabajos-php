	<?php 
		include "../app/CategoryController.php";
		$CategoryController =new CategoryController();
			$categories = $CategoryController->get();

		echo json_encode($categories);
	?>
<!DOCTYPE html>
<html>
<head>
	<style type="text/css">
		#updateForm{
			display: none;
		}
	</style>
	<meta charset="utf-8">
	<title>Categories</title>
</head>
<body>
	<h1>
		Categories
		<?php if (isset($_SESSION) && isset($_SESSION['error'])): ?>
			<?php echo "<h3>La operacion se realizo con error: ".$_SESSION['error']."</h3>" ?>
			<?php unset($_SESSION['error'])?>
		<?php endif ?>
		<?php if (isset($_SESSION) && isset($_SESSION['success'])): ?>
			<?php echo "<h3>La operacion se realizo con exito: ".$_SESSION['success']."</h3>" ?>
			<?php unset($_SESSION['success'])?>
		<?php endif ?>
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
			<?php foreach ($categories as $category): ?>
				<tr>
					<td>
						<?= $category["id"] ?>
					</td>
					<td>
						<?= $category["NAME"] ?>
					</td>
					<td>
						<?= $category["description"] ?>
					</td>
					<td>
						<button onclick="edit(<?=$category['id']?>,'<?=$category['NAME']?>','<?=$category['description']?>','<?=$category['status']?>')">
							Edit category
						</button>
						<button onclick="remove(<?=$category['id']?>)">
							Delete
						</button>
					</td>
				</tr>
			<?php endforeach ?>
			
		</table>
		<form id="storeForm" action="../app/CategoryController.php" method="POST">
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
		<form id="updateForm" action="../app/CategoryController.php" method="POST">
			 	<fieldset>
			 		<legend>
			 			Edit category
			 		</legend>
			 		<label>
			 			name
			 		</label>
			 		<input id="name" type="text" name="name" required="">
			 		<label>
			 			description
			 		</label>
			 		<textarea id="description" name="description" placeholder="write here" required=""></textarea>
			 		<label>
			 			status
			 		</label>
			 		<select name="status" id="status">
			 			<option>
			 				active
			 			</option>
			 			<option>
			 				inactive
			 			</option>
			 		</select>
			 		<button type="sumbit">Save Category</button>
			 		<input type="hidden" name="action" value="update">
			 		<input type="hidden" name="id" id="id">
			 	</fieldset>
			 </form>
		<form id="destroyForm" action="../app/CategoryController.php" method="POST">
			<input type="hidden" name="action" value="destroy">
			<input type="hidden" name="id" id="id_destroy">
		</form>	 
			
	</div>
	<script type="text/javascript">
		function edit(id,name,description,status){
			alert(id);
			document.getElementById("storeForm").style.display="none";
			document.getElementById("updateForm").style.display="Block";

			document.getElementById("name").value=name;
			document.getElementById("description").value=description;
			document.getElementById("status").value=status;
			document.getElementById("id").value=id;
		}
		function remove(id){
			var confirm = prompt("Si quiere eliminar el registro ,escriba:"+id);
			if (confirm == id) {

				document.getElementById('id_destroy').value=id;
				document.getElementById('destroyForm').submit();

			}
		}
	</script>
</body>
</html>