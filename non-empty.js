
function required()
{

var empty = document.forms["forma"]["broj_kartice"].value && document.forms["forma"]["ime_prezime"].value;

if ( !empty )
{
  Swal.fire({
    icon: 'error',
    title: 'Greška',
    text: 'Skeniraj karticu!',
   
  })
return false;
}
else 
Swal.fire({
  position: 'center',
  icon: 'success',
  title: 'Prijatno!',
  showConfirmButton: false,
  timer: 2000
})

header("Refresh:0");
return true; 

}
