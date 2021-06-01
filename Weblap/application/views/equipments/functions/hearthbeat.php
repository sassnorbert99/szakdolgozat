<?php

 function hearthbeat($login,$name){
        if ($login){
          $timestamp = date("Y-m-d H:i:s");
        $statement1="UPDATE users SET  lastvisit='".$timestamp."' WHERE username='".$name."'";
        
        $conn = mysqli_connect("89.40.126.232:8080", "varazstorony", "VarazsTorony_18", "varazstorony") or die("Connection Error: " . mysqli_error($conn));
        mysqli_query($conn,$statement1 );
        $insert_id = mysqli_insert_id($conn);
        //if(!empty($insert_id)) {
           mysqli_close($conn);
          }
       
       echo "true";
        }

        hearthbeat($loggedin,$username);
        


?>