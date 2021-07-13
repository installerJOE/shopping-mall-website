//get the password from password input field
function passwordValue(){
    var password = document.getElementById("password").value
    return password;
}

//check the length of password and send message oninput
function checkPasswordLength(){
    var pwdLength = passwordValue().length;
    var pwdLengthMsg = document.getElementById("pwdStrength");
    var pwdLengthValid
    if(pwdLength < 8){
        pwdLengthMsg.innerHTML = "Password is weak"
        pwdLengthMsg.style.color = "red"
        pwdLengthValid = 0;
    }
    else if(pwdLength >= 8 && pwdLength < 12){
        pwdLengthMsg.innerHTML = "Password is fairly strong"
        pwdLengthMsg.style.color = " #fda64e"
        pwdLengthValid = 1
    }
    else{
        pwdLengthMsg.innerHTML = "Password is very strong"
        pwdLengthMsg.style.color = "#00cc00"
        pwdLengthValid = 1
    }
    return pwdLengthValid;
}

//compare passwords before submission
function passwordMatch(){
    var pwd = passwordValue();
    var pwc = document.getElementById('password_confirm').value
    var pwdMatch = document.getElementById('pwdMatch')
    var pwdMatchValid
    if(pwd.localeCompare(pwc) === 0){
        pwdMatch.innerHTML = "Password match correct"
        pwdMatch.style.color = "#00cc00"
        pwdMatchValid = 1;
    }
    else{
        pwdMatch.innerHTML = "Password not yet matched"
        pwdMatch.style.color = "red"
        pwdMatchValid = 0;
    }
    return pwdMatchValid;
}

//validate password before submitting form
function validatePassword(){
    const pwdMatch = passwordMatch();
    const pwdLength = checkPasswordLength();
    var errMsg;
    if(pwdLength === 1 && pwdMatch === 1){
        console.log('Password is okay, you may proceed to login')
        return true
    }
    else{
        // const errMsgBlock = document.createElement('div')
        // errMsgBlock.className = "alert alert-danger alert-dismissable fade show"
        // const btn = `
        //     <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        //         <span aria-hidden="true">&times;</span>
        //     </button>`
        //     alert("Workig")
        if(pwdLength === 0 && pwdMatch === 1){
            errMsg = "Password Strength is too weak. Please try a longer password"
        }
        else if(pwdLength === 1 && pwdMatch === 0){
            errMsg = "Passwords do not match. Please Try again"
        }
        else{
            errMsg = "Your Passwords do not match and strength is very weak. Please Try Again!"
        }
        alert(errMsg)
        return false
    }
}