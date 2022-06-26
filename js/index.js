const form1 = document.querySelector('#van1');
const form2 = document.querySelector('#van2');
const form3 = document.querySelector('#van3');
const formbutton1 = document.querySelector("#indexformbutton");

formbutton1.addEventListener("click", (e) => {
    if(form1.value == "" || form2.value == "" || form3.value == ""){
        e.preventDefault();
        alert("u moet in alle vakken iets selecteren");
    } else{
        e.preventDefault();
        document.getElementById("form1").submit();
        document.getElementById("form2").submit();
        document.getElementById("form3").submit();
    }
})