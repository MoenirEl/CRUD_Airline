const button = document.querySelector('#indexformbutton');

button.addEventListener("click", (e) => {
    if(username1.value == "" || password1.value == ""){
        e.preventDefault();
        alert("both username or password cannot be emty");
    }
})