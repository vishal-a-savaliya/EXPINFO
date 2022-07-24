<?php
 define("HOSTNAME","localhost");
 define("USERNAME","expinfo");
 define("PASSWORD","YtF%#YP03WW?");
 define("DBNAME","exp_info");
 
 $db = mysqli_connect(HOSTNAME,USERNAME,PASSWORD,DBNAME);
  if(!$db)
   {
     die('coming soon'.mysqli_error($con));
   }
 ?>