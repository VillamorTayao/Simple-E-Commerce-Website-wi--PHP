document.getElementById("show-password").addEventListener('click', () => {
    const inputPassword = document.getElementById("password");
    const passwordIcon = document.getElementById("show-password-icon");
    if(inputPassword.type == "password"){
        inputPassword.type = "text";
        passwordIcon.src = "./assets/icons/eye-password-show-svgrepo-com.svg";
    } else {
        inputPassword.type = "password";
        passwordIcon.src = "./assets/icons/eye-password-hide-svgrepo-com.svg";
    }
});