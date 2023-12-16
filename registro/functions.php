<?php
session_start();
function db_query(string $query, array $data = array())
{
	$string = "mysql:hostname=localhost;dbname=talentlink";
	$con = new PDO($string, 'root', '');

	$stm = $con->prepare($query);
	$check = $stm->execute($data);

	if($check)
	{
		$res = $stm->fetchAll(PDO::FETCH_ASSOC);
		if(is_array($res) && !empty($res))
		{
			return $res;
		} 
	}

	return false;
}
