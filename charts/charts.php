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
						<div class="card-header bg-warning bg-warning">Izdato po vrsti obroka za određeni datum</div>
						<div class="card-body">
						<div class="datumsmenalabel">
						<form action="" method="post" id="formavrstaobroka">
						<label for="">Izaberite datum za izveštaj : </label>
						<input type="date" name="datumvrstaobroka" id="datumvrstaobroka">
						<button type="submit" name="SubmitVrstaObroka" class="btn btn-primary">Filtriraj</button>
						<button type="reset" id="resetbtnVrstaObroka" name="resetbtnVrstaObroka" onClick="resetformVrstaObroka();" class="btn btn-danger">Poništi</button>
						</form>
						</div>
						<?php 		
									$datumVrstaObroka = '';
									
									if(isset($_POST['SubmitVrstaObroka'])){
									$datumVrstaObroka = $_POST['datumvrstaobroka'];								
								
									$sqlvrstaObrokaHladni = "SELECT vrsta_obroka AS 'vrstaObroka',COUNT(id) AS Total
									FROM `kantina_statistika` WHERE vrsta_obroka = 'hladni obrok' AND datum = '$datumVrstaObroka'";
									$queryvrstaObroka = mysqli_query($con, $sqlvrstaObrokaHladni);
									?> <label id="filterdatum">Filtrirano za datum : <span class="pdatumVrstaObroka"> <?php echo $datumVrstaObroka ?> </span></label><?php	
									}					
									if(empty($queryvrstaObroka) || mysqli_num_rows($queryvrstaObroka) < 1){
										echo "Nema izdatih bonova za izabrani datum";
									}
									else{

									foreach ($queryvrstaObroka as $vrstaObroka){

										?>
										<p> Hladan obroci : <span class="pformVrstaObroka"> <?= $vrstaObroka['Total'];?></span> izdatih jela </p>
										<?php
									}
									
									}
									$sqlvrstaObrokaTopli = "SELECT vrsta_obroka AS 'vrstaObroka',COUNT(id) AS Total
									FROM `kantina_statistika` WHERE vrsta_obroka = 'topli obrok' AND datum = '$datumVrstaObroka'";
									$queryvrstaObroka = mysqli_query($con, $sqlvrstaObrokaTopli);
									
									
									if(empty($queryvrstaObroka) || mysqli_num_rows($queryvrstaObroka) < 1 ){
										echo "Nema izdatih bonova za izabrani datum";
									}
									else{

									foreach ($queryvrstaObroka as $vrstaObroka){

										?>
										<p> Topli obroci : <span class="pformVrstaObroka"> <?= $vrstaObroka['Total'];?></span> izdatih jela </p>
										<?php
									}
									
									}
									
								?>	
								
							</div>
						</div>
					</div>
					<div class="col-md-4">
					<div class="card mt-4 mb-4">
						<div class="card-header bg-warning bg-warning">Izdato po bonovima za određeni datum</div>
						<div class="card-body">
						<div class="datumsmenalabel">
						<form action="" method="post" id="formabon">
						<label for="">Izaberite datum za izveštaj : </label>
						<input type="date" name="datumbon" id="datumbon">
						<button type="submit" name="SubmitBon" class="btn btn-primary">Filtriraj</button>
						<button type="reset" id="resetbtnbon" name="resetbtnbon" onClick="resetformbon();" class="btn btn-danger">Poništi</button>
						</form>
						</div>
						<?php 		
									$datumbon = '';
									if(isset($_POST['SubmitBon'])){
									$datumbon = $_POST['datumbon'];								
								
									$sql = "SELECT vrsta_bona AS 'Bonovi',COUNT(id) AS Total
									FROM `kantina_statistika` WHERE vrsta_bona = 'redovan' AND datum = '$datumbon'";
									$query = mysqli_query($con, $sql);
									?> <label id="filterdatum">Filtrirano za datum : <span class="pdatumbon"> <?php echo $datumbon ?> </span></label><?php	
									}					
									if(mysqli_num_rows($query) < 1){
										echo "Nema izdatih bonova za izabrani datum";
									}
									else{

									foreach ($query as $bon){

										?>
										<p> Redovan bon : <span class="pformbon"> <?= $bon['Total'];?></span> izdatih jela </p>
										<?php
									}
									
									}
									$sql = "SELECT vrsta_bona AS 'Bonovi',COUNT(id) AS Total
									FROM `kantina_statistika` WHERE vrsta_bona = 'gosti' AND datum = '$datumbon'";
									$query = mysqli_query($con, $sql);
									
									
									if(mysqli_num_rows($query) < 1){
										echo "Nema izdatih bonova za izabrani datum";
									}
									else{

									foreach ($query as $bon){

										?>
										<p> Gosti bon : <span class="pformbon"> <?= $bon['Total'];?></span> izdatih jela </p>
										<?php
									}
									
									}
									$sql = "SELECT vrsta_bona AS 'Bonovi',COUNT(id) AS Total
									FROM `kantina_statistika` WHERE vrsta_bona = 'faktura' AND datum = '$datumbon'";
									$query = mysqli_query($con, $sql);
									
									
									if(mysqli_num_rows($query) < 1){
										echo "Nema izdatih bonova za izabrani datum";
									}
									else{

									foreach ($query as $bon){

										?>
										<p> Faktura bon : <span class="pformbon"> <?= $bon['Total'];?></span> izdatih jela </p>
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
						<form action="" method="post" id="formasmena">
						<label for="">Izaberite datum za izveštaj : </label>
						<input type="date" name="datumsmena" id="datumsmena">
						<button type="submit" name="SubmitButton" class="btn btn-primary">Filtriraj</button>
						<button type="reset" id="resetbtn" name="resetbtn" onClick="resetform();" class="btn btn-danger">Poništi</button>
						</form>
						</div>
						<?php 		
									$datumsmena = '';
									if(isset($_POST['SubmitButton'])){
									$datumsmena = $_POST['datumsmena'];								
									
									$sql = "SELECT HOUR(`vreme_obroka`) AS 'Sati',COUNT(id) AS Total
									FROM `kantina_statistika` WHERE HOUR(`vreme_obroka`) BETWEEN 6 AND 14 AND datum = '$datumsmena'";
									$query = mysqli_query($con, $sql);
									?> <label id="filterdatum">Filtrirano za datum : <span class="pdatum"> <?php echo $datumsmena ?> </span></label><?php	
									}					
									if(mysqli_num_rows($query) < 1){
										echo "Nema izdatih obroka za danas";
									}
									else{

									foreach ($query as $smena){

										?>
										<p> Prva smena : <span class="pform"> <?= $smena['Total'];?></span> izdatih jela </p>
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
										<p> Druga smena : <span class="pform"> <?= $smena['Total'];?></span> izdatih jela </p>
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
										<p> Treća smena : <span class="pform"> <?= $smena['Total'];?></span> izdatih jela </p>
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
<script src="formareset.js"></script>
