<?php
include 'conexion.php';

$qselect=mysql_query("select *from producto")or die(mysql_error());
?>
<table border="1" class="table" >
	  <thead>
    <tr>
    	
      <th scope="col">codigo</th>
      <th scope="col">articulo</th>
      <th scope="col">costo</th>
      <th scope="col">precio</th>
      <th scope="col">proveedor</th>
      <th scope="col">caducidad</th>
    </tr>
  </thead>

<?php
while($rselect=mysql_fetch_row($qselect)){
?>
	 
	<tr>		
	<td><?php echo $rselect[1]; ?></td>
	<td><?php echo $rselect[2]; ?></td>
	<td><?php echo $rselect[3]; ?></td>
	<td><?php echo $rselect[4]; ?></td>
	<td><?php echo $rselect[5]; ?></td>
	<td><?php echo $rselect[6]; ?></td>
</tr>
 

<?php
}
?>
</table>
