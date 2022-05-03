<?php

require '../connection.php';


	if($_POST["action"] == 'fetch2')
	{
		$query = "
		SELECT vrsta_obroka, COUNT(id) AS Total 
		FROM kantina_statistika WHERE WEEK(datum) = WEEK(CURDATE())
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
	if($_POST["action"] == 'fetch')
	{
		$query = "
		SELECT vrsta_obroka, COUNT(id) AS Total 
		FROM kantina_statistika WHERE datum = (CURDATE())
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
	if($_POST["action"] == 'fetch3')
	{
		$query = "
		SELECT vrsta_obroka, MONTHNAME(datum),COUNT(id) AS Total
		FROM kantina_statistika WHERE YEAR(datum) = YEAR(CURDATE())
		GROUP BY vrsta_obroka, MONTHNAME(datum)
		ORDER BY MONTH(datum)
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
	if($_POST["action"] == 'fetch4')
	{
		$query = "
		SELECT vrsta_obroka, COUNT(id) AS Total 
		FROM kantina_statistika WHERE MONTH(datum) = MONTH(CURDATE())
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






?>

