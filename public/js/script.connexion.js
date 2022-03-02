const login = document.getElementById("login");
const password = document.getElementById("password");
const form = document.getElementById("form");
const errorElement = document.getElementById("error")

form.addEventListener('submit',(e) => {
    let message = []
    if(login.value === '' || login.value == null){
        message.push('le login est obligatoire ')
    }

    if(password.value.length <= 4){
        message.push('le mot de pass doit contenir au minimum 4 carractere')
    }

    if(message.length > 0){
        e.preventDefault()
        errorElement.innerText = message.join(',')
    }
    

})
