const form1 = document.querySelector('#Reis');
const form2 = document.querySelector('#Van');
const form3 = document.querySelector('#Naar');
const formbutton1 = document.querySelector("#indexformbutton");
formbutton1.addEventListener("click", (e) => {
    if(form1.value == "" || form2.value == "" || form3.value == ""){
        e.preventDefault();
        alert("u moet in alle vakken iets hebben geselecteerd");
    } //else if(form2.value == form3.value){
        //e.preventDefault();
        //alert("het vertrekpunt en aankomstpunt mogen niet hetzelfde zijn.");
    //}
});