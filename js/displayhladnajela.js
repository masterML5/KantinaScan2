function uncheck() {
  document.getElementById("myCheckbox2").checked = false;
  let checkboxtopla = document.getElementsByClassName('toplajela')
  for (var i=0; i<checkboxtopla.length; i++) {
  checkboxtopla[i].style.display = "none";
  }

}


function displayHladnaJela() {
  var checkBox = document.getElementById("myCheckbox1");
  var checkBoxHladnaJela = document.getElementsByClassName("hladnajela");
  for (var i=0; i<checkBoxHladnaJela.length; i++) {
   

  if (checkBox.checked == true){
   checkBoxHladnaJela[i].style.display = "grid";
   uncheck();
  
  } else {
    checkBoxHladnaJela[i].style.display = "none";
  }
}
}
