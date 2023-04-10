$("document").ready(function(){
    $("#submit").click(function(){
        const email = 
        document.getElementById('email');
    email.addEventListener('blur', ()=>{
       let regex =
     /^([_\-\.0-9a-zA-Z]+)@([_\-\.0-9a-zA-Z]+)\.([a-zA-Z]){2,7}$/;
       let s = email.value;
       if(regex.test(s)){
          email.classList.remove(
                'is-invalid');
          emailError = true;
        }
        else{
            email.classList.add(
                  'is-invalid');
            emailError = false;
        }
    })
    })
});