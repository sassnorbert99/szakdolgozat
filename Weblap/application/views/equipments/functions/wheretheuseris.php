<?php
 function wheretheuseris($th,$title){
        if ($th->session->userdata('logged_in')){
          $timestamp = date("Y-m-d H:i:s");
        $statement1="UPDATE users SET currentpage='".$title."', visitdate='".$timestamp."' WHERE username='".$th->session->userdata('username')."'";
        
        $conn = mysqli_connect() or die("Connection Error: " . mysqli_error($conn));
        mysqli_query($conn,$statement1 );
        $insert_id = mysqli_insert_id($conn);
        //if(!empty($insert_id)) {
           mysqli_close($conn);
          }
       
      
        }


?>