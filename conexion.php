       <?php
       /*
       $servername = "bkjqya0pu8yo586xvsnj-mysql.services.clever-cloud.com";
       $database = "bkjqya0pu8yo586xvsnj";
       $username = "ud91kir94surbvdx";
       $password = "6c1GWzWXQEGYIBoeTEB3";
       // Create connection
       $conn = mysqli_connect($servername, $username, $password, $database);
       // Check connection
       if (!$conn) {
       die("Connection failed: " . mysqli_connect_error());
       }
       */

       $server='bkjqya0pu8yo586xvsnj-mysql.services.clever-cloud.com';
       $user='ud91kir94surbvdx';
       $password='6c1GWzWXQEGYIBoeTEB3';
       $bd='bkjqya0pu8yo586xvsnj';


       $conexion=mysql_connect($server,$user,$password) or die(mysql_error());
       $sdb=mysql_select_db($bd,$conexion) or die(mysql_error());
       ?>