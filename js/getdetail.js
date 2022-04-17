
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
