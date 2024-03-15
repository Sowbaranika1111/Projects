function registerUser() {
    var getEmail = document.getElementById('userEmail').value;
    var getPass = document.getElementById('password').value;

    if (getEmail === "" && getPass === "") {
        alert("Please Fill in !");
        return false;
    }

    localStorage.setItem("forValidation", JSON.stringify({ email: getEmail, password: getPass }))
    let forValidation = JSON.parse(localStorage.getItem("forValidation")) || []

    debugger

    const registeredUsers = JSON.parse(localStorage.getItem('users')) || [];

    let getResults = registeredUsers.filter((ele) => ele.email === forValidation.email && ele.password == forValidation.password)

    // for(let i = 0 ; i < registeredUsers.length ; i++){
    if (getResults.length > 0) {

            getEmail = JSON.stringify(getEmail) //don't stringify here itself
            getPass = JSON.stringify(getPass)
    
            //localStorage.setItem("RegisteredUser",JSON.stringify({Name : getEmail,Password:getPass }))
            localStorage.setItem("RegisteredUser",getEmail)
            localStorage.setItem("RegisteredPass", getPass)
            window.location.href = "dashBoardAftrLogin.html"
            // alert("Logged in")
    }
    else{
            alert('Invalid Email Id or Password');
            return false;
            
    }
}

    const submitButton = document.getElementById("submit");
    submitButton.addEventListener('click', function (event) {
        event.preventDefault();
        registerUser();
    });
     























    // these two didn't work
    // //let userAvailable = registeredUsers.some((user) => user.email === getEmail && user.password === getPass);
    // if (forValidation in registeredUsers ) {

    //     getEmail = JSON.stringify(getEmail) //don't stringify here itself
    //     getPass = JSON.stringify(getPass)

    //     //localStorage.setItem("RegisteredUser",JSON.stringify({Name : getEmail,Password:getPass }))
    //     localStorage.setItem("RegisteredUser",getEmail)
    //     localStorage.setItem("RegisteredPass", getPass)
    //     window.location.href = "dashBoardAftrLogin.html"
    //     // alert("Logged in")
    // }
    // else {
    //     alert("Email Id not found! Please Sign-up")
    // }

 
 
//  //// this is used when the email and password is stored as an array
//        ////code without user validation
// function loginUser() {
    
//     var getEmail = document.getElementById('userEmail').value;
//     var getPass = document.getElementById('password').value;
//     debugger
//     if(getEmail === "" && getPass === ""){
//         alert("Please Fillout!")
//     }
//     const registeredUsers = JSON.parse(localStorage.getItem('users')) || [];
//     console.log(registeredUsers);
//         //let userAvailable = registeredUsers.some((user) => user.email === getEmail && user.password === getPass);
//         let userAvailable = false;
//         for (let i = 0 ; i<registeredUsers.length;i++)
//             if (userAvailable ) {
//                 getEmail = JSON.stringify(getEmail) //don't stringify here itself
//                 getPass = JSON.stringify(getPass)

//                 //localStorage.setItem("RegisteredUser",JSON.stringify({Name : getEmail,Password:getPass }))
//                 localStorage.setItem("RegisteredUser",getEmail)
//                 localStorage.setItem("RegisteredPass", getPass)
//                 window.location.href = "dashBoardAftrLogin.html"
//                 // alert("Logged in")
//             }
//             else {
//                 alert("Email Id not found! Please Sign-up")
//             }
// }

// const submitButton = document.getElementById("submit")
// submitButton.addEventListener('click', function (event) {
//     event.preventDefault();
//     loginUser()
// })
























// //This method is working perfectly for retriving object properties without using key names (dynamic method) but don't follw this method
// function loginUser() {
//     var getEmail = document.getElementById('userEmail').value;
//     let getPass = document.getElementById('password').value;
//     // debugger;
//     // console.log(getEmail,getPass)
//     let existingUsers = JSON.parse(localStorage.getItem("users"))

//     if (existingUsers[getEmail]) {

//         //=====for retrieving mail =====
//         existingUsers = JSON.stringify(getEmail)
//         localStorage.setItem('registeredEmail',existingUsers)
        
//         //=====for retrieving pass =====
//         existingUsers = JSON.stringify(getPass)
//         localStorage.setItem("registeredPassword",existingUsers)
//         // alert("email exists")
        
//         location.href='dashBoardAftrLogin.html'
//     }
//     else {
//         alert("Please Register!")
//     }
// }


// const submitButton = document.getElementById("submit")
// submitButton.addEventListener('click', function (event) {
//     event.preventDefault();
//     loginUser()
// })
