<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>jQuery Mobile: Theme Download</title>
	<link rel="stylesheet" href="themes/dannytheme.min.css" />
	<link rel="stylesheet" href="themes/jquery.mobile.icons.min.css" />
	<link rel="stylesheet" href="themes/jquery.mobile.structure-1.4.3.min.css" />
	<script src="themes/js/jquery-1.11.1.min.js"></script>
	<script src="themes/js/jquery.mobile-1.4.3.min.js"></script>
</head>
<body>
	<div data-role="page" data-theme="a">
		<div data-role="header" data-position="inline" >
			<h1>UNAV2</h1>
		</div>
		<div data-role="content" data-theme="a" data-filter="true">
<ul data-role="listview" data-inset="true" >
<?php
require ('include/config.php');

$query = "SELECT * FROM campos";
$result = mysql_query($query) or die(mysql_error());
$count = mysql_num_rows($result);
if ($count !== 0) {
while($row = mysql_fetch_array($result)) {


	?>
		
 <?php echo "<li><a href='buscar.php?id=".$row['idCampo']."'>".$id=$row['nombre']."</a></li>"?>
   	
		<?php
}}
		?> </ul>
		</div>
	</div>
</body>
</html>