const form = document.getElementById("formasmena");
const formbon = document.getElementById("formabon");
const formVrstaObroka = document.getElementById("formavrstaobroka")
const p = document.getElementsByClassName("pdatum")[0];
const p2 = document.getElementsByClassName("pform");
const pVrstaObroka = document.getElementsByClassName("pdatumVrstaObroka")
const p2VrstaObroka = document.getElementsByClassName("pformVrstaObroka")
const pbon = document.getElementsByClassName("pdatumbon")[0];
const p2bon = document.getElementsByClassName("pformbon");


function resetformbon(){
    formbon.reset();
    pbon.innerHTML= "";
    let len = p2.length; 
    for (let i = 0; i < len; i++) { 
         p2bon[i].textContent = "0"; 
         }
}

function resetform(){
   
   
   form.reset();
   p.innerHTML= "";
   let len = p2.length; 
   for (let i = 0; i < len; i++) { 
        p2[i].textContent = "0"; 
        }
}

function resetformVrstaObroka(){
    formVrstaObroka.reset();
    pVrstaObroka.innerHTML= "";
    let len = p2VrstaObroka.length;
    for (let i = 0; i < len; i++){
        p2VrstaObroka[i].textContent = "0";
    }
}

if ( window.history.replaceState ) {
    window.history.replaceState( null, null, window.location.href );
}