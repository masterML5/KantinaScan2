<?php
include("sidemenu/sidemenu.html");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kantina</title>   
    
    <link href="style.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/chosen/1.8.7/chosen.min.css" integrity="sha512-yVvxUQV0QESBt1SyZbNJMAwyKvFTLMyXSyBHDO4BG5t7k/Lw34tyqlSDlKIrIENIzCl+RVUNjmCPG+V/GMesRw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    
    
  </head>
<body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script> 
<script language="JavaScript" src="https://cdnjs.cloudflare.com/ajax/libs/chosen/1.8.7/chosen.jquery.min.js" integrity="sha512-rMGGF4wg1R73ehtnxXBt5mbUfN9JUJwbk21KMlnLZDJh7BkPmeovBuddZCENJddHYYMkCh9hPFnPmS9sspki8g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <div class="card">

        <img src="assets/images/profile.png" class="card-img-top" id="image"  name="image" alt="slika-profilna">
        <div class="card-body">
        <div class="test">
        <div class="form-group">
        <form action="insert.php" autocomplete="off"  name="forma" method="POST">
         
                <label class="label2" for="Userinfo">Broj kartice</label>
                <input type="text" autofocus="autofocus" onkeyup="GetDetail2(this.value); GetDetail4(this.value)" class="form-control" id="CardNumber" name="broj_kartice" placeholder="Broj kartice" onkeypress='return stopenter(event)'>
                </div>
              <div class="form-group">
              
                <label class="label2" for="Userinfo">Ime Prezime</label>
                <input type="text" class="form-control" id="Name" onkeyup="GetDetail(this.value); GetDetail3(this.value)" name="ime_prezime" placeholder="Ime Prezime" onkeypress='return stopenter(event)' >
              </div>
              
              <div class="form-group">
                <label  class="label2" for="Userinfo">Datum</label>
                <input type="date" readonly class="form-control-plaintext" id="datum" name="datum" value="datum">
                <script>
                document.getElementById('datum').valueAsDate = new Date();               
                </script>
          </div>
</div>
              <div class="form-group">
              <label class="vrsta_bona">Vrsta Bona</label>
                <div class="vrsta_bonova">
                
                <input type="radio" class="form-check-input" id="redovan" name="vrsta_bona" value="redovan" checked><span id="redovanSpan" for="redovan">Redovan</span>
                <input type="radio" class="form-check-input" id="gosti" name="vrsta_bona" value="gosti" ><span  id="gostiSpan" for="gosti">Gosti</span>
                <input type="radio" class="form-check-input" id="fakturise_se" name="vrsta_bona" value="faktura" ><span  id="fakturiseSeSpan" for="fakturise_se">Fakturise se</span>
                </div>
              </div>
          <div class="tooltip">
           
          <input class="js-virtual-keyboard" data-kioskboard-type="keyboard" data-kioskboard-placement="bottom" data-kioskboard-specialcharacters="false" placeholder="Your Name" />
          </div>
          
</div>
 <div>
  <li>
    <input type="checkbox" id="myCheckbox1"  name="vrsta_obroka[]" onclick="displayHladnaJela()" value="hladni obrok"/>
    <label class="labelcheckbox"  for="myCheckbox1"><img src="assets/images/hladan.png" width="150" height="150" /></label>
  </li>
  <li>
    <input type="checkbox" id="myCheckbox2"    name="vrsta_obroka[]" onclick="displayToplaJela()" value="topli obrok"/>
    <label class="labelcheckbox" for="myCheckbox2"><img src="assets/images/topli.png" width="150" height="150" /></label>
  </li>
</div>
  <script src="js/displayhladnajela.js"></script>
  <script src="js/displaytoplajela.js"></script>
  
<?php
        require ('connection.php');
        
        //dnevni obrok iz baze kao checkbox
        $sql = "SELECT * FROM vrsta_jela WHERE tip_jela = 'hladan' AND datum = CURDATE()";
        $result = mysqli_query($con,$sql);
     
       
      
       if(mysqli_num_rows($result) > 0){
          ?>
        <div class="hladnajela" style="display:none;">
        <?php
        foreach($result as $vrstajelahladan){
          
            
          ?>
          
          <article  class="labelcaption">
          <label class="naslov" for="<?= $vrstajelahladan['id_vrsta_jela'];?>">
          <input id="<?= $vrstajelahladan['id_vrsta_jela'];?>" type="checkbox"  class="x" name="ime_jela[]" value="<?= $vrstajelahladan['ime_jela'];?>"/><span><?= $vrstajelahladan['ime_jela'];?><span>
          </label>
          <label class="labelcheckbox y" for="<?= $vrstajelahladan['id_vrsta_jela'];?>"><img src="<?= $vrstajelahladan['slika'];?>" width="150" height="150">
          </label>
          </article>
        
            <?php
          }
            ?>
             </div>
                <?php
          } 
          else{
            ?> <div class="alert alert-danger"> <?php echo  "Niste izabrali  hladna jela za danas";?> </div> <?php
          }
            ?>
          
         
          <?php

       
        //dnevni obrok iz baze kao checkbox
        $sql = "SELECT * FROM vrsta_jela WHERE tip_jela = 'topli' AND datum = CURDATE()";
        $result2 = mysqli_query($con,$sql);
    
 
 
        if(mysqli_num_rows($result2) > 0){
          ?>
        <div class="toplajela" style="display:none;">
        <?php
        foreach($result2 as $vrstajelatopli){
          ?>
          <article class="labelcaption">
          <label class="naslov" for="<?= $vrstajelatopli['id_vrsta_jela'];?>">
          <input id="<?= $vrstajelatopli['id_vrsta_jela'];?>" type="checkbox"  name="ime_jela[]" value="<?= $vrstajelatopli['ime_jela'];?>"/><span><?= $vrstajelatopli['ime_jela'];?><span>
          </label>
          <label class="labelcheckbox" for="<?= $vrstajelatopli['id_vrsta_jela'];?>"><img src="<?= $vrstajelatopli['slika'];?>" width="150" height="150">
          </label>
          </article>
          <?php
        }
          ?>
          </div>
              <?php
        } 
        else{
          ?> <div class="alert alert-danger"> <?php echo  "Niste izabrali topla jela za danas";?> </div> <?php
         
        }
          ?>
      

      
        

 
        <div class="actionButtons">
        <button type="submit"  id="checkBtn" formaction="insert.php" class="btn btn-success aBtn" >Dodaj</button>
        <button type="reset" class="btn btn-danger aBtn" onClick="window.location.reload();">Poništi</button>
        <!-- <a class="btn btn-primary aBtn" href="data/datatables.php" target="_blank">Evidencija/izmena izdatih obroka</a>  -->
        <!-- <button type="button" onClick="location.href='data/datatables.php'" class="btn btn-primary">Evidencija/izmena izdatih obroka</button>  -->
        </div>
      </div>
   
    </form>
    
<script src="js/spanClick.js"></script>
<script src="js/verification.js"></script>
<script src="js/stopenter.js"></script>
<script src="js/getdetail.js"></script>

</body>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script> 
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="node_modules\sweetalert\dist\sweetalert.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-eMNCOe7tC1doHpGoWe/6oMVemdAVTMs2xqW4mwXrXsW0L84Iytr2wi5v2QjrP/xp" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.min.js" integrity="sha384-cn7l7gDp0eyniUwwAZgrzD06kc/tftFf19TOAs2zVinnD/C7E91j9yyk5//jjpt/" crossorigin="anonymous"></script>

</html>