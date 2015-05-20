<?php 


function data_user($dbc,$id){
	if (is_numeric($id))
	{
		$cond =" WHERE id = $id";
	}
	else {
		$cond ="WHERE email ='$id'";
	}
$q ="SELECT * FROM users $cond";

$r = mysqli_query($dbc, $q);
$data= mysqli_fetch_assoc($r);

//$team = $data['user_id'];
//$array=$team.explode(';', $team);

return $data;
	
	
}

?>
