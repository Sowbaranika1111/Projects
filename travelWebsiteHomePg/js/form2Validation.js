function getTodayDate(){

    let now = new Date();
    const date = String(now.getDate()).padStart(2,"0");
    const month = String(now.getMonth()+1).padStart(2,"0");
    const year = now.getFullYear();
    return `${year}-${month}-${date}`;
}
const dateField = document.getElementById("date");
dateField.setAttribute("max",getTodayDate());


function checkValidity() {
    
    var name = document.getElementById('name').value
    var phone = document.getElementById("phone").value

    var age = document.getElementById('age');
    var selectedAge = age.options[age.selectedIndex].value;
    
    // var gender = document.querySelector("input[name='gender']:checked").checked
    var male = document.getElementById("male")
    var female = document.getElementById("female")
    var others = document.getElementById("others")
    
    var dob = document.getElementById("date").value
    var addr = document.getElementById('addr').value
    var checkBox = document.querySelector(".roboCheck").checked

    if( name == "" || phone =="" || dob == "" || addr == "" || !male.checked && !female.checked && !others.checked  || checkBox == false){
        alert("Empty form cannot be submitted!")    
    }

    else if (name == "") {
        alert("Name field is empty!")
        return false;
    }
    else if(phone.length < 10 || phone == "" || phone.length > 10){
        alert("Invalid phone num")
    }
    else if (selectedAge == "Choose a category") {
        alert("You didn't select any age category!")
        return false;
    }
    else if (!male.checked && !female.checked && !others.checked){     
        alert("Please choose gender")
        return false;
    }

    else if (dob == ''){
        alert("Date is not chosen")
        return false;
    }
    else if(dob < '2000-01-01' || dob > Date()){
        alert("Invalid date");
        return false;
    }

    else if(addr == ""){
        alert("Provide your residential address!")
        return false;
    }
    else if(checkBox == false){
        alert("Robos are not allowed!")
        return false;
    }
}

form = document.getElementById("form");
form.addEventListener("submit",function(event){
    event.preventDefault();
    checkValidity();
})