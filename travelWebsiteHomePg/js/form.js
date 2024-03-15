//// working correctly
(function formValidation(){
               
    let forms = document.getElementsByTagName("form")
    
        // var name = document.getElementById('name').value // dont fetch here itself

    var validation = Array.prototype.filter.call(forms,
        function(form){
                form.addEventListener("submit",
                function(event){
                        
                    var name = document.getElementById('name').value
                    var age = document.getElementById('age').value
                    var gender = document.querySelector("input[name='gender']:checked").value
                    var dob = document.getElementById("date").value
                    var phone = document.getElementById("phone").value
                    var addr = document.getElementById('addr').value
                    var checkBox = document.querySelector(".roboCheck").checked

                        debugger;

                        if(form.checkValidity() === false || name === "" || age ==="Choose a category" || phone ===""){
                            //alert("Empty!")
                            event.preventDefault();
                            event.stopPropagation();
                        }
                        else{
                        let existingUsers = JSON.parse(localStorage.getItem("userDetails")) || []
                        let userExists = existingUsers.some((user)=>user.Name === name && user.Phone === phone)
    
                        if (userExists){
                            alert('Already registered!')
                            return;
                        }
    
                        const newUser = {
                            Name:name,
                            Phone:phone,
                            Age:age,
                            Gender:gender,
                            DOB:dob,
                            Address:addr
                        }
                        existingUsers.push(newUser);
    
                        localStorage.setItem('userDetails',JSON.stringify(existingUsers))
                        alert("Registration successful!")
                        }
                        form.classList.add("was-validated")
                    })          
            }) 
    })();



























////Not a good way to validate
// {
    
//     let name = document.getElementById("name").value
//     let age = document.getElementById("age").value
//     let gender = document.getElementById("gender").value
//     let date = document.getElementById("date").value
//     debugger
//     let addr = document.getElementById("addr").value
//     let roboCheckBox = document.getElementById("robo")

//     if(name === ""){
//         alert("Name field is empty!")
//         return false;
//     }
//     else if(age != "Choose a category"){
//         // alert("You didn't select age category!")
//         // return false;
//         return;
//     }
//     else if(gender = "undefined"){
//         alert("Gender is unchosen!")
//         return false;
//     }
//     else if(date === ""){
//         alert("Date is not filled")
//         return false;
//     }
//     else if(addr === "" ){
//         alert("Address field is empty")
//         return false;
//     }
    
//     else if(roboCheckBox.length === 0){
//         alert("Robot")
//     }
// }