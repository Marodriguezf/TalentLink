<?php

	$arr = [];
	$arr['correo'] 		= $_POST['correo'];

 	$row = db_query("select * from registro where correo = :correo limit 1",$arr);

	if(!empty($row))
	{
		$row = $row[0];

		//check the password
		if(password_verify($_POST['password'], $row['password']))
		{
			//password correct
			$info['success'] 	= true;
			$_SESSION['PROFILE'] =$row;
		}else
		{
			$info['errors']['email'] = "correo o contraseña incorrecto";
		}

	}else
	{
		$info['errors']['email'] = "correo o contraseña incorrecto";
	}