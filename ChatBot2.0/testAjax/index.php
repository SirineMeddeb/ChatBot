<?php
	require_once('connect.php');
?>
<html>
	<head>
		<title>Ajax</title>
		<link rel="stylesheet" type="text/css" href="css/style.css">
	</head>
	<body>
		<div class="content">
			<?php
				try{
					global $db;
					$results=$db->prepare('select * from envoie');
					$results->execute();
					$names=$results->fetchAll(PDO::FETCH_ASSOC);
					$results->closeCursor();
				}
				catch(Exception $e){
					echo $e->getMessage();
					exit;
				}
				if($names==true){ ?>
				<ul class="group">
					<?php foreach($names as $name){
						$name=$name['message'];					
					?>
					<li><?php echo $name; ?></li>
					<?php } ?>
				</ul>					
		</div>
	<form id="testForm" method="post">
		<input id="name" name="name" placeholder="Name.."/>
		<input id="testSubmit" class="btn btn-green" type="submit" value="send" name="testSubmit"/>
	</form>
	</body>
</html>