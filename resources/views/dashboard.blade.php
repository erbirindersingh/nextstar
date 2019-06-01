<?php

	$data=Session::get('data');
	echo $data["id"];
	if($data["id"]==0){
		return URL::route("/login");
	}	
	else{
		
	}
?>