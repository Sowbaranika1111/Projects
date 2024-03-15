function registerUser() {
    const email = document.getElementById('email').value;
    const password = document.getElementById('password').value;
    
    const existingUsers = JSON.parse(localStorage.getItem('users')) || [] ;

    const userExists = existingUsers.some((user) => user.email === email) 

    if (userExists) {
        alert('Email already exists!.Please login')
    }
    const newUser = {
        email: email,
        password: password,
    };
    existingUsers.push(newUser);

    localStorage.setItem('users', JSON.stringify(existingUsers));

    alert("Registration successful! You can click 'ok' to login")
    location.href = "loginPg.html"
}

const submitButton = document.getElementById("submit");
submitButton.addEventListener('click', function (event) {
    event.preventDefault();
    registerUser();
})

































// This is working but , in localStorage it is storing the values as ==> usersParsed1 = {userEmail:"123@gmail.com",userPassword:'123'},email="123@gmail.com" , password:"123"

// function registerUser() {
//     const email = document.getElementById('email').value;
//     const password = document.getElementById('password').value;
//     debugger
//     const usersParsed1 = {userEmail:email,userPassword:password};

//     //let users = localStorage.getItem("users") || {}
//     const usersParsed = JSON.parse(localStorage.getItem('usersParsed1')) || {}
    

//     if (usersParsed[email]) {
//         alert("Already registered EmailId.You can login by clicking 'ok' ")
//         location.href="dashBoardAftrRegistration.html.html"
        
//         //return;
//     }

//     // usersParsed1[email] = password
//     localStorage.setItem('users', JSON.stringify(usersParsed1))
//     alert("registered")
//     //location.href="dashBoardAftrRegistration.html"
//     // alert("Registered successfully!");
//     // return;
// }


// const submitButton = document.getElementById("submit");
// submitButton.addEventListener('click', function(event){
//     event.preventDefault();
//     registerUser();
// });














// function userRegistration() {
//     const email = document.getElementById("email").value;
//     const password = document.getElementById("password").value;

//     const registeredUsers = JSON.parse(localStorage.getItem('usersInfo')) || []

//     const userExisting = registeredUsers.some((user) => user.email === email)

//     if (userExisting) {
//         alert("Email already exists!Please Login!");
//         return;
//     }
//     const newUser = {
//         email: email,
//         password: password,
//     };
//     registeredUsers.push(newUser);

//     localStorage.setItem('usersInfo', JSON.stringify(registeredUsers));

//     alert("Registered successfully!")
// }

// const submitButton = document.getElementById("submit")
// submitButton.addEventListener('click', function (event) {
//     event.preventDefault();
//     userRegistration();
// })