<!-- database connection -->


<?php
 

        
        define("HOSTNAME","localhost");
        define("USERNAME","root");
        define("PASSWORD","");
        define("DBNAME","paint");
    
        $con = mysqli_connect(HOSTNAME,USERNAME,PASSWORD,DBNAME);
        
        if(!$con){
            die("connection failed". mysqli_connect_error());
        }else{
            // echo "connected";
        }

?>
