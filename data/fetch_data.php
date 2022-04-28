<?php include('connection.php');

$output= array();
$sql = "SELECT * FROM kantina_statistika ";

$totalQuery = mysqli_query($con,$sql);
$total_all_rows = mysqli_num_rows($totalQuery);

if(isset($_POST['search']['value']))
{
	$search_value = $_POST['search']['value'];
	$sql .= " WHERE ime_prezime like '%".$search_value."%'";
	$sql .= " OR id like '%".$search_value."%'";
	$sql .= " OR broj_kartice like '%".$search_value."%'";
	$sql .= " OR datum like '%".$search_value."%'";
	$sql .= " OR vrsta_obroka like '%".$search_value."%'";
	$sql .= " OR vrsta_bona like '%".$search_value."%'";
	$sql .= " OR ime_jela like '%".$search_value."%'";

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
	$sql .= " ORDER BY ime_jela desc";
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
