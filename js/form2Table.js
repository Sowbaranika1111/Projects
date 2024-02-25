//Displaying element's ids

let nameToDisplay = document.getElementById("name")
let phoneToDisplay =  document.getElementById("phone")
let ageToDisplay = document.getElementById("age")
let genderToDisplay =  document.getElementById("gender")
let dobToDisplay = document.getElementById("dob")
let addressToDisplay =  document.getElementById("addr")
debugger
//Values retrieved from localStorage
let userName = JSON.parse(localStorage.getItem("Name"))
let phone = JSON.parse(localStorage.getItem("Phone"))
let age = JSON.parse(localStorage.getItem("Age"))
let gender = JSON.parse(localStorage.getItem("Gender"))
let dob = JSON.parse(localStorage.getItem("DOB"))
let address = JSON.parse(localStorage.getItem("Address"))

//Creating textnodes for the text we need to display
let nameTextNode = document.createTextNode(userName)
let phoneTextNode = document.createTextNode(phone)
let ageTextNode = document.createTextNode(age)
let genderTextNode = document.createTextNode(gender)
let dobTextNode = document.createTextNode(dob)
let addressTextNode = document.createTextNode(address)

//Inserting at the respective positions
nameToDisplay.appendChild(nameTextNode)
phoneToDisplay.appendChild(phoneTextNode)
ageToDisplay.appendChild(ageTextNode)
genderToDisplay.appendChild(genderTextNode)
dobToDisplay.appendChild(dobTextNode)
addressToDisplay.appendChild(addressTextNode)

