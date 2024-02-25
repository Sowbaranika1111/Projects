debugger
const form = document.getElementById("form");
console.log(form);

form.addEventListener('submit', function (event) {
    event.preventDefault();

    function getTodayDate() {

        let now = new Date();
        const date = String(now.getDate()).padStart(2, "0");
        const month = String(now.getMonth() + 1).padStart(2, "0");
        const year = now.getFullYear();
        return `${year}-${month}-${date}`;
    }
    const dateField = document.getElementById("date");
    dateField.setAttribute("max", getTodayDate());

    //Form Validation
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
        debugger

        // if (name == "" || phone == "" || dob == "" || addr == "" || !male.checked && !female.checked && !others.checked || checkBox == false) {
        //     alert("Empty form cannot be submitted!")
        // }

        if (name == "") {
            alert("Name field is empty!")
            return false;
        }
        else if (phone.length < 10 || phone == "" || phone.length > 10) {
            alert("Invalid phone num")
        }
        else if (selectedAge == "Choose a category") {
            alert("You didn't select any age category!")
            return false;
        }
        else if (!male.checked && !female.checked && !others.checked) {
            alert("Please choose gender")
            return false;
        }

        else if (dob == '') {
            alert("Date is not chosen")
            return false;
        }
        else if (dob < '2000-01-01' || dob > Date()) {
            alert("Invalid date");
            return false;
        }

        else if (addr == "") {
            alert("Provide your residential address!")
            return false;
        }
        else if (checkBox == false) {
            alert("Robos are not allowed!")
            return false;
        }
        else {
            return true;
        }
    }
    form.addEventListener('submit', function (event) {
        event.preventDefault();

        const isValid = checkValidity();

        if (isValid) {
            // displaying alert based on insertion or non-insertion
            debugger;
            const formData = new FormData(form);
            console.log(formData);

            fetch('./form2_connect.php', {
                method: 'post',
                body: formData,
            })

                .then((res) => res.json())
                .then((data) => {
                    console.log("data", data);
                    if (data.success) {
                        alert("Data inserted successfully!")
                        // form.reset();
                    } else {
                        alert("Could not insert since phone number is already existing! ");
                    }
                })
                .catch((error) => {
                    alert("Could not register!" + error);
                })
        }
    })
});
debugger



//function while updating========================================================



var originalPhone = document.getElementById("phone").value; // Variable to store the original phone number

function onUpdate() {
    var update_id = document.getElementById('update_id').value; // Get the update_id
    var name = document.getElementById('name').value;
    var phone = document.getElementById("phone").value;
    var age = document.getElementById('age').value;
    var gender = document.querySelector("input[name='gender']:checked").value;
    var date = document.getElementById("date").value;
    var addr = document.getElementById('addr').value;

    if (phone !== originalPhone) {
        // Phone number has changed; perform the check for an existing phone number
        fetch('check_phone.php', { // Create a separate PHP script for this check
            method: 'POST',
            body: JSON.stringify({
                phone: phone
            }),
            headers: {
                'Content-Type': 'application/json'
            }
        })
        .then(response => response.json())
        .then(data => {
            if (data.success === false) {
                alert(data.Msg);
            } else {
                // Phone number is unique; proceed with the update
                sendUpdateRequest(update_id, name, phone, age, gender, date, addr);
            }
        })
        .catch(error => {
            console.error(error);
        });
    } else {
        // Phone number has not changed; proceed with the update
        sendUpdateRequest(update_id, name, phone, age, gender, date, addr);
    }
}

function sendUpdateRequest(update_id, name, phone, age, gender, date, addr) {
    // Send the update request to your PHP script (form2_updateInsert.php)
    fetch('form2_updateInsert.php', {
        method: 'POST',
        body: JSON.stringify({
            update_id: update_id,
            name: name,
            phone: phone,
            age: age,
            gender: gender,
            date: date,
            addr: addr
        }),
        headers: {
            'Content-Type': 'application/json'
        }
    })
    .then(response => response.text())
    .then(data => {
        if (data.includes("successfully")) {
            alert("Data updated successfully!");
        } else {
            alert("Could not update: " + data);
        }
    })
    .catch(error => {
        console.error(error);
    });
}


    let updateButton = document.getElementById("update");
    updateButton.addEventListener('submit', function (event) {
        event.preventDefault();
        onUpdate();
    });

    // Initialize the originalPhone variable with the current phone number
    originalPhone = document.getElementById("phone").value;


























// document.addEventListener("DOMContentLoaded", function () {
//     let updateButton = document.getElementById("update");
//     updateButton.addEventListener('submit', function (event) {
//         event.preventDefault();
//         onUpdate();
//     });



// debugger  //without document loading..directly clicking update
// function onUpdate() {
//     console.log("OnUpdate function called!");
//     var update_id = document.getElementById('update_id').value; // Get the update_id
//     var name = document.getElementById('name').value;
//     var phone = document.getElementById("phone").value;
//     var age = document.getElementById('age').value;
//     var gender = document.querySelector("input[name='gender']:checked").value;
//     var date = document.getElementById("date").value;
//     var addr = document.getElementById('addr').value;

//     if (phone !== originalPhone) {
//         // Phone number has changed; perform the check for an existing phone number
//         fetch('check_phone.php', {
//             method: 'POST',
//             body: JSON.stringify({
//                 phone: phone
//             }),
//             headers: {
//                 'Content-Type': 'application/json'
//             }
//         })
//             .then(response => response.json())
//             .then(data => {
//                 if (data.success === false) {
//                     alert(data.Msg);
//                 } else {
//                     // Phone number is unique; proceed with the update
//                     sendUpdateRequest(update_id, name, phone, age, gender, date, addr);
//                 }
//             })
//             .catch(error => {
//                 console.error(error);
//             });
//     } else {
//         // Phone number has not changed; proceed with the update
//         sendUpdateRequest(update_id, name, phone, age, gender, date, addr);
//     }
// }

// function sendUpdateRequest(update_id, name, phone, age, gender, date, addr) {
//     // Send the update request to your PHP script (form2_updateInsert.php)
//     fetch('form2_updateInsert.php', {
//         method: 'POST',
//         body: JSON.stringify({
//             update_id: update_id,
//             name: name,
//             phone: phone,
//             age: age,
//             gender: gender,
//             date: date,
//             addr: addr
//         }),
//         headers: {
//             'Content-Type': 'application/json'
//         }
//     })
//         .then(response => response.text())
//         .then(data => {
//             if (data.includes("successfully")) {
//                 alert("Data updated successfully!");
//             } else {
//                 alert("Could not update: " + data);
//             }
//         })
//         .catch(error => {
//             console.error(error);
//         });
// }

// document.getElementById("update").addEventListener("click", function (event) {
//     event.preventDefault();
//     onUpdate();
// });






















//      function onUpdate() {
//     var name = document.getElementById('name').value
//     var phone = document.getElementById("phone").value

//     var age = document.getElementById('age');
//     var selectedAge = age.options[age.selectedIndex].value;

//     // var gender = document.querySelector("input[name='gender']:checked").checked
//     var male = document.getElementById("male")
//     var female = document.getElementById("female")
//     var others = document.getElementById("others")

//     var dob = document.getElementById("date").value
//     var addr = document.getElementById('addr').value

//     fetch('form2_updateInsert.php', {
//         method: 'POST',
//         body: JSON.stringify({
//             update_id: update_id,
//             name: name,
//             phone: phone,
//             age: age,
//             gender: gender,
//             date: date,
//             addr: addr
//         }),
//         headers: {
//             'Content-Type': 'application/json'
//         }
//     })
//         .then(response => response.text())
//         .then(data => {
//             if (data.success) {
//                 alert("Data updated successfully!")
//                 // form.reset();
//             } else {
//                 alert("Could not update ");
//             }
//         })
//         .catch((error) => {
//
//             console.error(error);
//         });

// }
// document.addEventListener("DOMContentLoaded", function () {
//     let updateButton = document.getElementById("update");
//     updateButton.addEventListener('click', function (event) {
//         event.preventDefault();
//         onUpdate();
//     })
// })
































// debugger;
// var formValidation = true;

// if (formValidation) {
//     // displaying alert based on insertion or non-insertion
//     debugger;
//     const formData = new FormData(form);
//     console.log(formData);

//     fetch('./form2_connect.php', {
//         method: 'post',
//         body: formData,
//     })

//         .then((res) => res.json())
//         .then((data) => {
//             console.log("data", data);
//             if (data.success) {
//                 alert("Data inserted successfully!")
//                 // form.reset();
//             } else {
//                 alert("Could not insert! ");
//             }
//         })
//         .catch((error) => {
//             alert("Could not register!" + error);
//         })
// }
//     }
// })
