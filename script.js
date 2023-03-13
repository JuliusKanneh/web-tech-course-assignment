//todo: use check and cross icons for validation
$fNameError = document.getElementById('fname-error');
$lNameError = document.getElementById('lname-error');
$emailError = document.getElementById('email-error');
$passwordError = document.getElementById('password-error');
$dobError = document.getElementById('dob-error');
$msgError = document.getElementById('msg-error');
$formError = document.getElementById('form-error');

function validateFName(){
    var fname = document.getElementById('firstname').value;
    $lNameError.style.color="red";
    if(fname.length == 0){
        $fNameError.innerHTML='First name is required';
        return false;
    }
    if(!fname.match(/^[a-z, .'']+$/i)){
        $fNameError.innerHTML='<i class="fa-solid fa-xmark"></i>';
        return false;
    }
    $fNameError.innerHTML='<i class="fa-solid fa-check"></i>';
    $fNameError.style.color="blue";
    return true;
}

function validateLName(){
    var lname = document.getElementById('lastname').value;
    $lNameError.style.color="red";
    if(lname.length == 0){
        $lNameError.innerHTML='Last name is required';
        return false;
    }
    if(!lname.match(/^[a-z, .'']+$/i)){
        $lNameError.innerHTML='<i class="fa-solid fa-xmark"></i>';
        return false;
    }
    $lNameError.innerHTML='<i class="fa-solid fa-check"></i>';
    $lNameError.style.color="blue";
    return true;
}

function validateEmail(){
    var email = document.getElementById('email').value;
    $emailError.style.color="red";
    if(email.length == 0){
        $emailError.innerHTML='Email is required';
        return false;
    }
    if(!email.match(/[^\s]*@[a-z0-9.-]*/i)){
        $emailError.innerHTML='<i class="fa-solid fa-xmark"></i> Invalid Email';
        return false;
    }
    $emailError.innerHTML='<i class="fa-solid fa-check"></i>';
    $emailError.style.color="blue";
    return true;
}

//review the the Regex to improve it
function validatePassword(){
    var password = document.getElementById('password').value;
    $passwordError.style.color="red";
    if(password.length == 0){
        $passwordError.innerHTML='Password is required';
        return false;
    }
    if(!password.match("^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,}$")){
        $passwordError.innerHTML='<i class="fa-solid fa-xmark"></i> weak password';
        return false;
    }
    $passwordError.innerHTML='<i class="fa-solid fa-check"></i>';
    $passwordError.style.color="blue";
    return true;
}

//review the the Regex to improve it
function validateDob(){
    var dob = document.getElementById('dob').value;
    $dobError.style.color="red";
    if(dob.length == 0){
        $dobError.innerHTML='DoB is required';
        return false;
    }
    // if(!dob.match("^(0[1-9]|1[012])[-/.](0[1-9]|[12][0-9]|3[01])[-/.](19|20)\\d\\d$")){
    //     $dobError.innerHTML='<i class="fa-solid fa-xmark"></i> Invalid Format';
    //     return false;
    // }
    
    $dobError.innerHTML='<i class="fa-solid fa-check"></i>';
    $dobError.style.color="blue";
    return true;
}

function validateMsg(){
    var msg = document.getElementById('contact_us_msg').value;
    $msgError.style.color="red";
    if(msg.length == 0){
        $msgError.innerHTML='Message is required';
        return false;
    }

    $msgError.innerHTML='<i class="fa-solid fa-check"></i>';
    $msgError.style.color="blue";
    return true;
}

//todo: make it work: not working as expected.
function validateForm(){
    // preventDefault();
    if(!validateFName() || !validateLName() || !validateEmail() ||!validatePassword() || !validateDob() || !validateMsg()){
        $formError.innerHTML='Invalid fields, please varify!';
        $formError.style.color="red";
        return false;
    }
    return true;
}