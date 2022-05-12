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