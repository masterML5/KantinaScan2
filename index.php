<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kantina</title>
    <link rel="stylesheet" href="sweetalert2.min.css">
    <link href="style3.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/chosen/1.8.7/chosen.min.css" integrity="sha512-yVvxUQV0QESBt1SyZbNJMAwyKvFTLMyXSyBHDO4BG5t7k/Lw34tyqlSDlKIrIENIzCl+RVUNjmCPG+V/GMesRw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/chosen/1.8.7/chosen.jquery.min.js" integrity="sha512-rMGGF4wg1R73ehtnxXBt5mbUfN9JUJwbk21KMlnLZDJh7BkPmeovBuddZCENJddHYYMkCh9hPFnPmS9sspki8g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

  </head>
<body>

    <div class="card"  style="width: 25rem;">

        <img src="" class="card-img-top" id="image"  name="image" alt="slika-profilna">
        <div class="card-body">
        <div class="form-group">
        <form action="" autocomplete="off" onsubmit="required();  return false" name="forma" method="POST">
                <label class="label2" for="Userinfo">Broj kartice</label>
                <input type="text" autofocus="autofocus" onkeyup="GetDetail2(this.value); GetDetail4(this.value)" class="form-control" id="CardNumber" name="broj_kartice" placeholder="Broj kartice" onkeypress='return stopenter(event)'onsubmit="required(); return false">
                </div>
              <div class="form-group">
              
                <label class="label2" for="Userinfo">Ime Prezime</label>
                <input type="text" class="form-control" id="Name" onkeyup="GetDetail(this.value); GetDetail3(this.value)" name="ime_prezime" placeholder="Ime Prezime" onkeypress='return stopenter(event)' onsubmit="required(); return false">
              </div>
              
              <div class="form-group">
                <label  class="label2" for="Userinfo">Datum</label>
                <input type="date" readonly class="form-control-plaintext" id="datum" name="datum" value="datum">
                <script>
                document.getElementById('datum').valueAsDate = new Date();
               
                </script>
          </div>

        </div>
      <div>
        <ul>
  <li>
    <input type="checkbox" id="myCheckbox1" requried class="vrsta_obroka" name="vrsta_obroka[]" value="hladni obrok"/>
    <label class="labelcheckbox"  for="myCheckbox1"><img src="images/hladan.png" width="150" height="150" /></label>
  </li>
  <li>
    <input type="checkbox" id="myCheckbox2"  required class="vrsta_obroka" name="vrsta_obroka[]" value="topli obrok"/>
    <label class="labelcheckbox" for="myCheckbox2"><img src="images/topli.png" width="150" height="150" /></label>
  </li>
        </div>
        <button type="submit" formaction="insert.php" id="checkBtn" class="btn btn-primary" onsubmit="sweetalertclick();" onClick="window.location.reload();">Dodaj</button>
        <button class="btn btn-danger" onClick="window.location.reload();">Poništi</button>
        <a class="btn btn-primary" href="data/datatables.php">Evidencija/izmena izdatih obroka</a> 
      </div>
    </form>
 
    <script src="non-empty.js"></script>

    <script type="text/javascript">
function stopenter(e)
{
  var key;
  if(window.event)
  key = window.event.keyCode;
  else
  key = e.which

  if(key==13)
  return false;
  else
  return true;
}

  </script>
<script>
  function GetDetail3(str){
    if(str.length == 0){
      document.getElementById("image").src = "";
      return;
    }
    else{
      var xmlhttp = new XMLHttpRequest();
      xmlhttp.onreadystatechange = function() {
        if(this.readyState == 4 && this.status == 200) {
          var myObj = JSON.parse(this.responseText);
          document.getElementById("image").src = myObj[0];
        }
      };
      xmlhttp.open("GET", "search3.php?Name=" + str, true);
      xmlhttp.send();
    }
  }
  </script>
<script>
  function GetDetail(str){
    if(str.length == 0){
      document.getElementById("CardNumber").value = "";
      return;
    }
    else{
      var xmlhttp = new XMLHttpRequest();
      xmlhttp.onreadystatechange = function() {
        if(this.readyState == 4 && this.status == 200) {
          var myObj = JSON.parse(this.responseText);
          document.getElementById("CardNumber").value = myObj[0];
        }
      };
      xmlhttp.open("GET", "search.php?Name=" + str, true);
      xmlhttp.send();
    }
  }
  </script>
  <script>
  function GetDetail2(str){
    if(str.length == 0){
      document.getElementById("Name").value = "";
      return;
    }
    else{
      var xmlhttp = new XMLHttpRequest();
      xmlhttp.onreadystatechange = function() {
        if(this.readyState == 4 && this.status == 200) {
          var myObj = JSON.parse(this.responseText);
          document.getElementById("Name").value = myObj[0];
        }
      };
      xmlhttp.open("GET", "search2.php?CardNumber=" + str, true);
      xmlhttp.send();
    }
  }
  </script>
    <script>
  function GetDetail4(str){
    if(str.length == 0){
      document.getElementById("image").src = "";
      return;
    }
    else{
      var xmlhttp = new XMLHttpRequest();
      xmlhttp.onreadystatechange = function() {
        if(this.readyState == 4 && this.status == 200) {
          var myObj = JSON.parse(this.responseText);
          document.getElementById("image").src = myObj[0];
        }
      };
      xmlhttp.open("GET", "search4.php?CardNumber=" + str, true);
      xmlhttp.send();
    }
  }
  </script>
</body>
<script src="non-empty.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script> 
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="sweetalert2.all.min.js"></script>
<script src="sweetalert2.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-eMNCOe7tC1doHpGoWe/6oMVemdAVTMs2xqW4mwXrXsW0L84Iytr2wi5v2QjrP/xp" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.min.js" integrity="sha384-cn7l7gDp0eyniUwwAZgrzD06kc/tftFf19TOAs2zVinnD/C7E91j9yyk5//jjpt/" crossorigin="anonymous"></script>

</html>