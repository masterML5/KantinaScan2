
function displayToplaJela() {
  var checkBox2 = document.getElementById("myCheckbox2");
  var checkBoxToplaJela = document.getElementsByClassName("toplajela");
  for (var i=0; i<checkBoxToplaJela.length; i++) {
  if (checkBox2.checked == true){
    checkBoxToplaJela[i].style.display = "block";
  } else {
    checkBoxToplaJela[i].style.display = "none";
  }
}
}
