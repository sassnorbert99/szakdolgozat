
<?php 
		function getwaiter($pagetitle){

				$statement="SELECT username,currentpage,visitdate,lastvisit FROM users WHERE currentpage='".$pagetitle."'";
				
				
				
				$conn = mysqli_connect("89.40.126.232:8080", "varazstorony", "VarazsTorony_18", "varazstorony") or die("Connection Error: " . mysqli_error($conn));
				$result=mysqli_query($conn,$statement );
				$insert_id = mysqli_insert_id($conn);
				$rows=array();
				
				if ($result->num_rows == 0){
					echo "Hiba!";
				}
				else{
					$i=0;
				
					while( $row = $result->fetch_assoc()){
						$i++;
								
								$rows[] = array(
        						"username" => $row['username'],
        						"visitdate" => $row['visitdate'],
        						"lastvisit" => $row['lastvisit']
    							);
								
							
					}					
					usort($rows, function($firstItem, $secondItem) {
        			$timeStamp1 = strtotime($firstItem['visitdate']);
        			$timeStamp2 = strtotime($secondItem['visitdate']);
        				return $timeStamp1 - $timeStamp2;
    				});
					
					
					
				}
				
				//print_r ($rows[1]['visitdate']);
				//echo ($rows[1]['username']);

				mysqli_close($conn);
				print_r(json_encode($rows));
				
				
				
}
getwaiter($data['title']);
?>