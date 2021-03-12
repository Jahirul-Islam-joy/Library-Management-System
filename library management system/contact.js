const form = document.getElementById('form');
const username = document.getElementById('username');
const email = document.getElementById('email');
const password = document.getElementById('password');
const mobile = document.getElementById('mobile');
const address = document.getElementById('address');

form.addEventListener('submit', e => {
    e.preventDefault();

    let validation = checkInputs();

    if (validation === true) {
        form.submit();
    }
});

function checkInputs() {
    // trim to remove the whitespaces
    const usernameValue = username.value.trim();
    const emailValue = email.value.trim();
    const passwordValue = password.value.trim();
    const mobileValue = mobile.value.trim();
    const addressValue = address.value.trim();

    if (usernameValue === '') {
        setErrorFor(username, 'Username cannot be blank');
        return false;
    } else {
        setSuccessFor(username);
    }

    if (emailValue === '') {
        setErrorFor(email, 'Email cannot be blank');
        return false;
    } else if (!isEmail(emailValue)) {
        setErrorFor(email, 'Not a valid email');
        return false;
    } else {
        setSuccessFor(email);
    }

    if (passwordValue === '') {
        setErrorFor(password, 'Password cannot be blank');
        return false;
    } else if (passwordValue.length < 6) {
        setErrorFor(password, 'password can not be less than 6');
        return false;
    } else {
        setSuccessFor(password);
    }

    if (mobileValue === '') {
        setErrorFor(mobile, 'Mobile no cannot be blank');
        return false;
    } else {
        setSuccessFor(mobile);
    }
    if (addressValue === '') {
        setErrorFor(address, 'Address cannot be blank');
        return false;
    } else {
        setSuccessFor(address);
    }

    return true;
}

function setErrorFor(input, message) {
    const formControl = input.parentElement;
    const small = formControl.querySelector('small');
    formControl.className = 'form-contro error';
    small.innerText = message;
}

function setSuccessFor(input) {
    const formControl = input.parentElement;
    formControl.className = 'form-contro success';
}

function isEmail(email) {
    return /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/.test(email);
}


