function validateForm() {
    console.log('success prevent default submit')

    let email = document.forms['myForm']['email'].value
    console.log(validateEmail(email))
    if (!email || !validateEmail(email)) {
        document.getElementById('email_error').style.display = 'block'
    }
    else{
        document.getElementById('email_error').style.display = 'none'
    }

    let passwd1 = document.forms['myForm']['passwd1'].value
    console.log(passwd1)
    if (!passwd1) {
        document.getElementById('passwd1_error').style.display = 'block'
    }
    else{
        document.getElementById('passwd1_error').style.display = 'none'
    }

    let request = new XMLHttpRequest
    request.open('POST', './server.php')
    request.setRequestHeader("Content-type", "application/json;charset=UTF-8")
    let data = {
        name: name
    }
    request.send(JSON.stringify(data))
    request.onreadystatechange = function () {
        if (request.readyState === 4)
            if (request.status === 200) {
                console.log(request.responseText)
            }
    }
    return false;
}


validateEmail = (email) => {
    let re = /\S+@\S+\.\S+/
    return re.test(email)
}