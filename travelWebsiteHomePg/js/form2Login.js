function loginUser() {
    var name = document.getElementById('name').value
    var phone = document.getElementById('phone').value
    let submitButton = document.getElementById("submit")

    if (name.length == 0 || phone.length < 10) {
        submitButton.disabled = true
    } else {
        submitButton.disabled = false
    }
}

document.getElementById("name").addEventListener("input", loginUser)
document.getElementById("phone").addEventListener("input", loginUser)
loginUser()

debugger
function userExistence() {
    const name = document.getElementById('name').value
    const phone = document.getElementById('phone').value
    debugger
    localStorage.setItem("userExistence", JSON.stringify({ Name: name , Phone: phone }))

    let registeredUsers = JSON.parse(localStorage.getItem("userDetails")) || []
    
    let compareWithExisting = registeredUsers.filter((user) => user.Name === name && user.Phone === phone)
    
    if(compareWithExisting.length > 0){

        debugger
        //let index = registeredUsers.indexOf(compareWithExisting)

        // let userName = compareWithExisting[0].Name;
        // let phone = compareWithExisting[0].Phone;
        // let age = compareWithExisting[0].Age;
        // let gender = compareWithExisting[0].Gender;
        // let dob = compareWithExisting[0].DOB;
        // let address = compareWithExisting[0].Address;

        let Name = JSON.stringify(compareWithExisting[0].Name)
        let Phone = JSON.stringify(compareWithExisting[0].Phone)
        let Age = JSON.stringify(compareWithExisting[0].Age)
        let Gender = JSON.stringify(compareWithExisting[0].Gender)
        let DOB = JSON.stringify(compareWithExisting[0].DOB)
        let Address = JSON.stringify(compareWithExisting[0].Address)

        localStorage.setItem("Name",Name)
        localStorage.setItem("Phone",Phone)
        localStorage.setItem("Age",Age)
        localStorage.setItem("Gender",Gender)
        localStorage.setItem("DOB",DOB)
        localStorage.setItem("Address",Address)

        alert("Done")
        location.href = "form2Table.html"
    }
    else{
        alert("Do Register")
    }
}

let submitButton = document.getElementById("submit")
submitButton.addEventListener("click",function(event){
    event.preventDefault();
    userExistence();
})