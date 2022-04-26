function uncheck1() {
  document.getElementById("myCheckbox1").checked = false;
  let checkboxhladna = document.getElementsByClassName('hladnajela')
  for (var i=0; i<checkboxhladna.length; i++) {
    checkboxhladna[i].style.display = "none";
  }

}


function displayToplaJela() {
  var checkBox2 = document.getElementById("myCheckbox2");
  var checkBoxToplaJela = document.getElementsByClassName("toplajela");
  for (var i=0; i<checkBoxToplaJela.length; i++) {
  if (checkBox2.checked == true){
    checkBoxToplaJela[i].style.display = "grid";
    uncheck1();
   
  } else {
    checkBoxToplaJela[i].style.display = "none";
    
  }
}
}
