
<?php 
	$dato1= $_POST['val_1'];
	$dato2= $_POST['val_2'];
	$tipo= $_POST['tipo'];
 ?>
 <?php if ($tipo==1): ?>
 	<?php echo "Resultado: ".($dato1+$dato2) ; ?>
 <?php endif ?>
 <?php if ($tipo==2): ?>
 	<?php echo "Resultado: ".($dato1-$dato2) ; ?>
 <?php endif ?>
 <?php if ($tipo==3): ?>
 	<?php echo "Resultado: ".($dato1*$dato2) ; ?>
 <?php endif ?>
 <?php if ($tipo==4): ?>
 	<?php echo "Resultado: ".($dato1/$dato2) ; ?>
 <?php endif ?>