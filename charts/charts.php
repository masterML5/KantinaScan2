<?php
require '../connection.php';

?>
<html>
	<head>
		<meta charset="utf-8" />
		<title>Kantina Statistika</title>
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
		<script	src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.bundle.min.js"></script>
		<script src="https://www.chartjs.org/samples/2.9.4/utils.js"></script>
		<link rel="stylesheet" href="style.css">
		
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" >
	</head>
	<body>
		<div class="container">
			<h2 class="text-center mt-4 mb-3">Statistika obroka u kantini</a></h2>

			
		</div>
		
		<div class="container-fluid">
		<a href="../index.php" class="btn btn-danger">Povratak nazad</a>
			<div class="row">
				<div class="col-md-4">
					<div class="card mt-4">
						<div class="card-header bg-warning">Današnji dan</div>
						<div class="card-body">
							<div class="chart-container pie-chart">
								<canvas id="pie_chart"></canvas>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-4">
					<div class="card mt-4">
						<div class="card-header bg-warning">Trenutna nedelja</div>
						<div class="card-body">
							<div class="chart-container pie-chart">
								<canvas id="doughnut_chart"></canvas>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-4">
					<div class="card mt-4 mb-4">
						<div class="card-header bg-warning">Trenutni mesec</div>
						<div class="card-body">
							<div class="chart-container pie-chart">
								<canvas id="bar_chart"></canvas>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-3">
					<div class="card mt-4 mb-4">
						<div class="card-header bg-warning">Izdato obroka danas po vrsti obroka</div>
						<div class="card-body">
							<p>
								Hladni obroci :
								<?php 
									
									$sql = "SELECT vrsta_obroka, COUNT(id) As Total FROM kantina_statistika WHERE datum = CURDATE() AND vrsta_obroka = 'hladni obrok'";
									$query = mysqli_query($con, $sql);
									$fetch_data = mysqli_fetch_assoc($query);
									if($fetch_data['Total'] == 0){
										echo "Nema hladnih obroka za danas";
									}
									else{
										echo '<span>' . $fetch_data['Total'] . '</span> izdatih obroka';
									}


								?>
							</p>
							<p>
								Topli obroci :
								<?php 
									
									$sql = "SELECT vrsta_obroka, COUNT(id) As Total FROM kantina_statistika WHERE datum = CURDATE() AND vrsta_obroka = 'topli obrok'";
									$query = mysqli_query($con, $sql);
									$fetch_data = mysqli_fetch_assoc($query);
									
									if($fetch_data['Total'] == 0){
										echo "Nema toplih obroka za danas";
									}
									else{
										echo '<span>' . $fetch_data['Total'] . '</span> izdatih obroka';
									}


								?>
							</p>
							</div>
						</div>
					</div>
					<div class="col-md-3">
					<div class="card mt-4 mb-4">
						<div class="card-header bg-warning">Izdato obroka danas po bonu</div>
						<div class="card-body">
						<p>
								Redovan bon :
								<?php 
									
									$sql = "SELECT vrsta_bona, COUNT(id) As Total FROM kantina_statistika WHERE datum = CURDATE() AND vrsta_bona = 'redovan'";
									$query = mysqli_query($con, $sql);
									$fetch_data = mysqli_fetch_assoc($query);
									if($fetch_data['Total'] == 0){
										echo "Nema hladnih obroka za danas";
									}
									else{
										echo '<span>' . $fetch_data['Total'] . '</span> izdatih obroka';
									}


								?>
							</p>
							<p>
								Gosti bon :
								<?php 
									
									$sql = "SELECT vrsta_bona, COUNT(id) As Total FROM kantina_statistika WHERE datum = CURDATE() AND vrsta_bona = 'gosti'";
									$query = mysqli_query($con, $sql);
									$fetch_data = mysqli_fetch_assoc($query);
									
									if($fetch_data['Total'] == 0){
										echo "Nema gosti bona za danas";
									}
									else{
										echo '<span>' . $fetch_data['Total'] . '</span> izdatih obroka';
									}


								?>
							</p>
							<p>
								Faktura bon :
								<?php 
									
									$sql = "SELECT vrsta_bona, COUNT(id) As Total FROM kantina_statistika WHERE datum = CURDATE() AND vrsta_bona = 'faktura'";
									$query = mysqli_query($con, $sql);
									$fetch_data = mysqli_fetch_assoc($query);
									
									if($fetch_data['Total'] == 0){
										echo "Nema faktura bona za danas";
									}
									else{
										echo '<span>' . $fetch_data['Total'] . '</span> izdatih obroka';
									}


								?>
							</p>
					
							</div>
						</div>
					</div>
					<div class="col-md-3">
					<div class="card mt-4 mb-4">
						<div class="card-header bg-warning">Izdato obroka danas po jelu</div>
						<div class="card-body">
						<?php 
									
									$sql = "SELECT ime_jela, COUNT(id) as Total FROM kantina_statistika WHERE datum = CURDATE() GROUP BY ime_jela";
									$query = mysqli_query($con, $sql);
									
									
									if(mysqli_num_rows($query) < 1){
										echo "Nema izdatih obroka za danas";
									}
									else{

									foreach ($query as $obrok){

										?>
										<p> <?= $obrok['ime_jela']; ?> : <span> <?= $obrok['Total'];?></span> izdatih jela </p>
										<?php
									}
									
								}

								?>	
							</div>
						</div>
					</div>
				
				    <div class="col-md-3">
					<div class="card mt-4 mb-4">
						<div class="card-header bg-warning">Izdato po smenama danas</div>
						<div class="card-body">
						<?php 
									
									$sql = "SELECT HOUR(`vreme_obroka`) AS 'Sati',COUNT(id) AS Total
									FROM `kantina_statistika` WHERE HOUR(`vreme_obroka`) BETWEEN 6 AND 14 AND datum = CURDATE()";
									$query = mysqli_query($con, $sql);
									
									
									if(mysqli_num_rows($query) < 1){
										echo "Nema izdatih obroka za danas";
									}
									else{

									foreach ($query as $smena){

										?>
										<p> Prva smena : <span> <?= $smena['Total'];?></span> izdatih jela </p>
										<?php
									}
									
									}
									$sql = "SELECT HOUR(`vreme_obroka`) AS 'Sati',COUNT(id) AS Total
									FROM `kantina_statistika` WHERE HOUR(`vreme_obroka`) BETWEEN 14 AND 22 AND datum = CURDATE()";
									$query = mysqli_query($con, $sql);
									
									
									if(mysqli_num_rows($query) < 1){
										echo "Nema izdatih obroka za danas";
									}
									else{

									foreach ($query as $smena){

										?>
										<p> Druga smena : <span> <?= $smena['Total'];?></span> izdatih jela </p>
										<?php
									}
									
									}
									$sql = "SELECT HOUR(`vreme_obroka`) AS 'Sati',COUNT(id) AS Total
									FROM `kantina_statistika` WHERE HOUR(`vreme_obroka`) BETWEEN 22 AND 6 AND datum = CURDATE()";
									$query = mysqli_query($con, $sql);
									
									
									if(mysqli_num_rows($query) < 1){
										echo "Nema izdatih obroka za danas";
									}
									else{

									foreach ($query as $smena){

										?>
										<p> Treća smena : <span> <?= $smena['Total'];?></span> izdatih jela </p>
										<?php
									}
									
									}

								?>	
							</div>
						</div>
					</div>
					<div class="col-md-4">
					<div class="card mt-4 mb-4">
						<div class="card-header bg-warning bg-warning">Izdato po smenama za određeni datum</div>
						<div class="card-body">
						<div class="datumsmenalabel">
						<form action="smena.php" method="post">
						<label for="">Izaberite datum za izveštaj : </label>
						<input type="date" name="datumsmena" id="datumsmena">
						<button type="submit" name="SubmitButton" class="btn btn-primary">Filtriraj</button>
						</form>
						</div>
						<?php 		
									$datumsmena = '';
									if(isset($_POST['SubmitButton'])){
									$datumsmena = $_POST['datumsmena'];								
									
									$sql = "SELECT HOUR(`vreme_obroka`) AS 'Sati',COUNT(id) AS Total
									FROM `kantina_statistika` WHERE HOUR(`vreme_obroka`) BETWEEN 6 AND 14 AND datum = '$datumsmena'";
									$query = mysqli_query($con, $sql);
									?> <label>Filtrirano za datum : <?php echo $datumsmena ?></label><?php	
									}					
									if(mysqli_num_rows($query) < 1){
										echo "Nema izdatih obroka za danas";
									}
									else{

									foreach ($query as $smena){

										?>
										<p> Prva smena : <span> <?= $smena['Total'];?></span> izdatih jela </p>
										<?php
									}
									
									}
									$sql = "SELECT HOUR(`vreme_obroka`) AS 'Sati',COUNT(id) AS Total
									FROM `kantina_statistika` WHERE HOUR(`vreme_obroka`) BETWEEN 14 AND 22 AND datum = '$datumsmena'";
									$query = mysqli_query($con, $sql);
									
									
									if(mysqli_num_rows($query) < 1){
										echo "Nema izdatih obroka za danas";
									}
									else{

									foreach ($query as $smena){

										?>
										<p> Druga smena : <span> <?= $smena['Total'];?></span> izdatih jela </p>
										<?php
									}
									
									}
									$sql = "SELECT HOUR(`vreme_obroka`) AS 'Sati',COUNT(id) AS Total
									FROM `kantina_statistika` WHERE HOUR(`vreme_obroka`) BETWEEN 22 AND 6 AND datum = '$datumsmena'";
									$query = mysqli_query($con, $sql);
									
									
									if(mysqli_num_rows($query) < 1){
										echo "Nema izdatih obroka za danas";
									}
									else{

									foreach ($query as $smena){

										?>
										<p> Treća smena : <span> <?= $smena['Total'];?></span> izdatih jela </p>
										<?php
									}
									
									}

								?>	
								
							</div>
						</div>
					</div>
				<!-- <div class="col-md-3">
					<div class="card mt-4 mb-4">
						<div class="card-header bg-warning">Godina</div>
						<div class="card-body">
							<div class="chart-container pie-chart">
								<canvas id="bar_chart2"></canvas>
								<script src="https://cdn.jsdelivr.net/npm/chartjs-adapter-date-fns/dist/chartjs-adapter-date-fns.bundle.min.js"></script>
							</div>
						</div>
					</div>
				</div> -->
			</div>
		</div>
	</body>
</html>
<script src="charts.js"></script>

