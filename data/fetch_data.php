<?php include('connection.php');

$output= array();
$sql = "SELECT * FROM kantina_statistika ";

$totalQuery = mysqli_query($con,$sql);
$total_all_rows = mysqli_num_rows($totalQuery);
$b = 0;


if(isset($_POST['ime_radnika'], $_POST['obrok'], $_POST['datum_od'],$_POST['datum_do']) && (($_POST['ime_radnika'] != '' || $_POST['obrok'] != '') && ($_POST['datum_od'] === '' && $_POST['datum_do'] === ''))){
	$ime_radnika = $_POST['ime_radnika'];
	$obrok = $_POST['obrok'];
	$datum_od = $_POST['datum_od'];
	$datum_do = $_POST['datum_do'];
	$sql .= " WHERE ime_prezime like '%".$ime_radnika."%'";
	$sql .= " AND ime_jela like '%".$obrok."'";
	$b=1;
}
if(isset($_POST['ime_radnika'], $_POST['obrok'], $_POST['datum_od'],$_POST['datum_do']) && (($_POST['ime_radnika'] === '' && $_POST['obrok'] === '') && ($_POST['datum_od'] != '' && $_POST['datum_do'] === '' ))){
	$ime_radnika = $_POST['ime_radnika'];
	$obrok = $_POST['obrok'];
	$datum_od = $_POST['datum_od'];
	$datum_do = $_POST['datum_do'];
	$sql .= " WHERE ime_prezime like '%".$ime_radnika."'";
	$sql .= " AND ime_jela like '%".$obrok."'";
	$sql .= " AND datum BETWEEN '$datum_od' AND '2200-01-01' ";
	
	$b=1;
}
if(isset($_POST['ime_radnika'], $_POST['obrok'], $_POST['datum_od'],$_POST['datum_do']) && (($_POST['ime_radnika'] === '' && $_POST['obrok'] === '') && ($_POST['datum_od'] === '' && $_POST['datum_do'] != '' ))){
	$ime_radnika = $_POST['ime_radnika'];
	$obrok = $_POST['obrok'];
	$datum_od = $_POST['datum_od'];
	$datum_do = $_POST['datum_do'];
	$sql .= " WHERE ime_prezime like '%".$ime_radnika."'";
	$sql .= " AND ime_jela like '%".$obrok."'";
	$sql .= " AND datum BETWEEN '1900-01-01' AND '$datum_do' ";
	
	$b=1;
}
if(isset($_POST['ime_radnika'], $_POST['obrok'], $_POST['datum_od'],$_POST['datum_do']) && (($_POST['ime_radnika'] != '' || $_POST['obrok'] != '') && ($_POST['datum_od'] != '' && $_POST['datum_do'] != '' ))){
	$ime_radnika = $_POST['ime_radnika'];
	$obrok = $_POST['obrok'];
	$datum_od = $_POST['datum_od'];
	$datum_do = $_POST['datum_do'];
	$sql .= " WHERE ime_prezime like '%".$ime_radnika."'";
	$sql .= " AND ime_jela like '%".$obrok."'";
	$sql .= " AND datum BETWEEN '$datum_od' AND '$datum_do' ";
	
	$b=1;
}
if(isset($_POST['search']['value']) && $_POST['search']['value'] != '')
{	
	if($b == 1){
	$search_value = $_POST['search']['value'];
	//$sql .= " WHERE ime_prezime like '%".$search_value."%'";
	$sql .= " AND id like '%".$search_value."%'";
	$sql .= " OR broj_kartice like '%".$search_value."%'";
	//$sql .= " OR datum like '%".$search_value."%'";
	$sql .= " OR vrsta_obroka like '%".$search_value."%'";
	$sql .= " OR vrsta_bona like '%".$search_value."%'";
	//$sql .= " OR ime_jela like '%".$search_value."%'";
	}
	else{
	$search_value = $_POST['search']['value'];
	$sql .= " WHERE ime_prezime like '%".$search_value."%'";
	$sql .= " OR id like '%".$search_value."%'";
	$sql .= " OR broj_kartice like '%".$search_value."%'";
	$sql .= " OR datum like '%".$search_value."%'";
	$sql .= " OR vrsta_obroka like '%".$search_value."%'";
	$sql .= " OR vrsta_bona like '%".$search_value."%'";
	$sql .= " OR ime_jela like '%".$search_value."%'";
	}
}


if(isset($_POST['order']))
{
	$column_name = $_POST['order'][0]['column'];
	$a = $_POST['columns'][$column_name]['name'];
	$order = $_POST['order'][0]['dir'];
	$sql .= " ORDER BY ".$a." ".$order."";

}
else
{
	$sql .= " ORDER BY id desc";
}

if($_POST['length'] != -1)
{
	$start = $_POST['start'];
	$length = $_POST['length'];
	$sql .= " LIMIT  ".$start.", ".$length;
}	

$query = mysqli_query($con,$sql);
$count_rows = mysqli_num_rows($query);
$data = array();
while($row = mysqli_fetch_assoc($query))
{
	$sub_array = array();
	$sub_array[] = $row['id'];
	$sub_array[] = $row['ime_prezime'];
	$sub_array[] = $row['broj_kartice'];
	$sub_array[] = $row['datum'];
	$sub_array[] = $row['vrsta_obroka'];
	$sub_array[] = $row['vrsta_bona'];
	$sub_array[] = $row['ime_jela'];
	$sub_array[] = '<a href="javascript:void();" data-id="'.$row['id'].'"  class="btn btn-info btn-sm editbtn" >Izmeni</a>  <a href="javascript:void();" data-id="'.$row['id'].'"  class="btn btn-danger btn-sm deleteBtn" >Izbriši</a>';
	$data[] = $sub_array;
}



$output = array(
	'draw'=> intval($_POST['draw']),
	'recordsTotal' =>$count_rows ,
	'recordsFiltered'=>   $total_all_rows,
	'data'=>$data,
);
echo  json_encode($output);
