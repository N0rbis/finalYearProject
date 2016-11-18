<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="styles.css">
	<?php include_once('connection.php'); ?>
</head>
<body>
	<p>test</p>
	<?php 
	
	$sql= "SELECT * FROM VehicleModelYear"; 		//Testing purposes for now, fetching everything in VehicleModelYear table.
	$stmt = $pdo->prepare($sql);					//Preparing statemement
	$stmt->execute();								
	//$total = $stmt->rowCount();						//Fetching a number of records count.
	//$obj = $stmt->fetchObject();				 	//Looping through each record and displaying model and make. 
	 $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
	
	?>
	
	<select name="sMake" class="sMakeClass">
 <?php foreach ($rows as $row) { ?>
    <option value="<?php echo $row ['id']; ?>"><?php echo $row ['make']; ?></option>
    <?php } ?>
	</select> 
	
			<select name="sModel" class="sModelClass">
 <?php  foreach ($rows as $row) { ?>
    <option value="<?php echo $row ['id']; ?>"><?php echo $row ['model']; ?></option>
    <?php } ?>
	</select> 
	
		<select name="sYear" class="sYearClass">
 <?php  foreach ($rows as $row) { ?>
    <option value="<?php echo $row ['id']; ?>"><?php echo $row ['year']; ?></option>
    <?php } ?>
	</select> 		
	
	
</body>
</html>
