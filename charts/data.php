<?php

require '../connection.php';

if(isset($_POST["action"]))
{
	if($_POST["action"] == 'insert')
	{
		$data = array(
			':language'		=>	$_POST["language"]
		);

		$query = "
		INSERT INTO kantina_statistika 
		(vrsta_obroka) VALUES (:language)
		";

		$statement = $connect->prepare($query);

		$statement->execute($data);

		echo 'done';
	}



	if($_POST["action"] == 'fetch')
	{
		$query = "
		SELECT vrsta_obroka, COUNT(id) AS Total 
		FROM kantina_statistika 
		GROUP BY vrsta_obroka
		";

		$result = $con->query($query);

		$data = array();

		foreach($result as $row)
		{
			$data[] = array(
				'language'		=>	$row["vrsta_obroka"],
				'total'			=>	$row["Total"],
				'color'			=>	'#' . rand(100000, 999999) . ''
			);
		}

		echo json_encode($data);
	}
}



?>

