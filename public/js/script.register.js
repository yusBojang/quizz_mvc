const form = document.getElementById("form");
const nom = document.getElementById("nom");
const prenom = document.getElementById("prenom");
const login = document.getElementById("login");
const password = document.getElementById("password");
const password1 = document.getElementById("password1");

form.addEventListener('submit', e => {
    e.preventDefault();

    validateInputs();
});

const setError = (element,message) => {
    const inputControl = element.parentElement;
    const errorDisplay = inputControl.querySelector('.error');

    errorDisplay.innerText = message;
    inputControl.classList.add('error');
    inputControl.classList.remove('success')
}


const setSuccess = element => {
    const inputControl = element.parentElement;
    const errorDisplay = inputControl.querySelector('.error');

    errorDisplay.innerText = '';
    inputControl.classList.add('success');
    inputControl.classList.remove('error');
};

const isValidEmail = login => {
    const re = /^(([^<>()[\]\\.,;:\s@"]+(\.[^<>()[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    return re.test(String(login).toLowerCase());
}

const validateInputs = () =>{
    const nomValue = nom.value.trim();
    const prenomValue = prenom.value.trim();
    const loginValue = login.value.trim();
    const passwordValue = password.value.trim();
    const password1Value = password1.value.trim();

    if(nomValue  === '') {
        setError(nom, 'le nom est obligatoire');
    } else {
        setSuccess(nom);
    }

    if(prenomValue === '') {
        setError(prenom, 'le prenom est obligatoire');
    } else {
        setSuccess(prenom);
    }

    if(loginValue === '') {
        setError(login, 'login est obligatoire');
    } else if (!isValidEmail(loginValue)) {
        setError(login, 'Entrer un address email valid');
    } else {
        setSuccess(login);
    }

    if(passwordValue === '') {
        setError(password, 'le mot de pass est incorrecte');
    } else if (passwordValue.length < 4 ) {
        setError(password, 'le mot de pass doit contenir 4 carractere')
    } else {
        setSuccess(password);
    }

    if(password1Value  === '') {
        setError(password1, 'confirmer votre mot de pass');
    } else if (password1Value !== passwordValue) {
        setError(password1, "mot de pass ne correspond pas");
    } else {
        setSuccess(password1);
    }




    
}




