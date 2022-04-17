
$("#checkBtn").click(function(){

var card = $("#CardNumber").val();
var name = $("Name").val();
var returnvalue = jQuery("#myCheckbox1").prop("checked") || jQuery("#myCheckbox2").prop("checked");
var returnvalueimejela = jQuery("#hladnajela2").prop("checked") || jQuery("#toplajela2").prop("checked");
/* var returnvalue2 = jQuery("#myCheckbox2").prop("checked"); */
/* var meal1 = $("myCheckbox1").val();
var meal2 = $("myCheckbox2").val(); */



if(name == '' || card == '') {
    Swal.fire({
      icon: 'error',
      title: 'Greška',
      text: 'Skeniraj karticu',
     
    })
    return false;
}
else if(returnvalue == '') {
  Swal.fire({
    icon: 'error',
    title: 'Greška',
    text: 'Izaberite vrstu obroka',
   
  })
  return false;
}
else if(returnvalueimejela == ''){
  Swal.fire({
    icon: 'error',
    title: 'Greška',
    text: 'Izaberite jelo',
   
  })
  return false;
}

else{
Swal.fire({
  position: 'center',
  icon: 'success',
  title: 'Prijatno!',
  showConfirmButton: false,
  timer: 5000
})

}


})
