<?php
session_start();
$var1=$_GET['id'];


$f_ini=$_GET['fechaini'];
$f_fin=$_GET['fechafin'];
$var2=$_GET['idCampo'];

?>

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
		<div data-role="header" data-position="inline">
    <a href="index.php" data-theme="e">Atras</a>
			<h1>UNAV2</h1>
		</div>
<div data-role="content" data-theme="a"data-filter="true">
		<?php
require ('include/config.php');

$query = "SELECT * FROM campos  where idCampo='$var1'";
$result = mysql_query($query) or die(mysql_error());
$count = mysql_num_rows($result);
if ($count !== 0) {
while($row = mysql_fetch_array($result)) {


	?>
		
 <?php echo "<center><h3>".$id=$row['nombre']."</h3></center>";
 ?>
   	
		<?php
}}
		?>
		
<form >
    <ul data-role="listview" data-inset="true">
    <li class="ui-field-contain">
        
            

            <label for="name2">Mes Inicial:</label>
            <input type="text" name="fechaini" id="fechaini" value="" data-clear-btn="true">
        </li>
         <li class="ui-field-contain">
            <label for="name2">Mes Final:</label>
            <input type="text" name="fechafin" id="fechafin" value="" data-clear-btn="true">
           <input type="hidden" name="idCampo" id="idCampo" value="<?php echo $_GET['id']; ?>" data-clear-btn="true">
            
           
        </li>
          <li class="ui-body ui-body-b">
            <fieldset class="ui-grid-a">
                    <div class="ui-block-a"><button type="reset" class="ui-btn ui-corner-all ui-btn-a">Reset</button></div>
                    <div class="ui-block-b"><button type="submit" class="ui-btn ui-corner-all ui-btn-a">Enviar</button></div>
            </fieldset>
        </li>
    </ul>
</form>
		
<?php
if (isset($_GET['idCampo'])) {
?>
<table data-role="table" id="table-column-toggle" data-mode="columntoggle" class="ui-responsive table-stroke">
     <thead>
       <tr>
         <th data-priority="5">Bautizados</th>
               <th data-priority="3">Total Bautizados</th>
         
       </tr>
     </thead>
     <tbody>
       <tr>
        
      
<?php

	  $query = "SELECT DISTINCT bautismos, sum(bautismos) as todosLosBautismos FROM `informemes`
INNER JOIN distritos d on d.idCampo = $var2
WHERE idPeriodo >=$f_ini and idPeriodo <=$f_fin";
$result = mysql_query($query) or die(mysql_error());
$count = mysql_num_rows($result);


if ($count !== 0) {
while($row = mysql_fetch_array($result)) {

 echo "<td><center><h3>".$id=$row['bautismos']."</h3></center>";
 echo "<td><center><h3>".$id=$row['todosLosBautismos']."</h3></center>";
	
}}
		
}

		?>
</tr>
     </tbody>
   </table>

</div>
	</div>
</body>
</html>