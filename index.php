<!doctype html>

<html lang="en">
<head>
  <meta charset="utf-8">

  <title>Hackathon</title>
  <meta name="description" content="Hackathon page">
  <link rel="stylesheet" href="css/style.css">
  <script src="js/jquery-3.2.1.min.js"></script>
</head>
<body>
	<h2> Klikni me </h2>
	<?php 
		echo "Če vidš tole je php ok";
	?>
	<script>
		$("h2").click(function(){
			alert("Če vidš tole je jquery ok :)");
		});
	</script>
</body>
</html>