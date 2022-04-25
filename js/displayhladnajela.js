
function displayHladnaJela() {
  var checkBox = document.getElementById("myCheckbox1");
  var checkBoxHladnaJela = document.getElementsByClassName("hladnajela");
  for (var i=0; i<checkBoxHladnaJela.length; i++) {
   

  if (checkBox.checked == true){
   checkBoxHladnaJela[i].style.display = "grid";
  
  } else {
    checkBoxHladnaJela[i].style.display = "none";
  }
}
}
