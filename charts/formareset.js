const form = document.getElementById("formasmena");
const formbon = document.getElementById("formabon");
const formVrstaObroka = document.getElementById("formavrstaobroka")
const p = document.getElementsByClassName("pdatum")[0];
const p2 = document.getElementsByClassName("pform");
const pVrstaObroka = document.getElementById("pdatumVrstaObroka");
const p2VrstaObroka = document.getElementsByClassName("pformVrstaObroka");
const pbon = document.getElementsByClassName("pdatumbon")[0];
const p2bon = document.querySelectorAll(".pformbon");
const rezbon = document.getElementsByClassName("rezultatiBon");



if ( window.history.replaceState ) {
    window.history.replaceState( null, null, window.location.href );
}