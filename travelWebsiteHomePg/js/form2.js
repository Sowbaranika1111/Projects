debugger
let submitButton = document.getElementById("submit")
submitButton.addEventListener("click", function (event) {
    event.preventDefault();
    formValidation();
});
function formValidation() {
    let forms = document.getElementsByTagName("form")[0];

    var name = document.getElementById('name').value
    var age = document.getElementById('age').value
    var gender = document.querySelector("input[name='gender']:checked").value
    var dob = document.getElementById("date").value
    var phone = document.getElementById("phone").value
    var addr = document.getElementById('addr').value
    var checkBox = document.querySelector(".roboCheck").checked 

    if (checkValidity()) {

            let existingUsers = JSON.parse(localStorage.getItem("userDetails")) || []
            let userExists = existingUsers.some((user) => user.Name === name && user.Phone === phone)

            if (userExists) {
                alert('Already registered!')
                return;
            }
            debugger
            const newUser = {
                Name: name,
                Phone: phone,
                Age: age,
                Gender: gender,
                DOB: dob,
                Address: addr
            }
            existingUsers.push(newUser);

            localStorage.setItem('userDetails', JSON.stringify(existingUsers))
            alert("Registration successful!")
            forms.reset();

        }
    else {alert("Please fillout all fields and accept all terms")}
}
debugger
function checkValidity() {
    var name = document.getElementById('name').value
    var age = document.getElementById('age').value
    var gender = document.querySelector("input[name='gender']:checked").checked
    var dob = document.getElementById("date").value
    var phone = document.getElementById("phone").value
    var addr = document.getElementById('addr').value
    var checkBox = document.querySelector(".roboCheck").checked

    if(name == ''){
        return false;
    }
    else if(age == ''){
        return false;
    }
    else if(gender == ""){
        return false;
    }
    else if(dob == ""){
        return false;
    }
    else if(phone == ''){
        return false;
    }
    else if(addr == ""){
        return false;
    }
    else if(checkBox == false){
        return false;
    }
    return true;
}
