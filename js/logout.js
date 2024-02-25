let logoutButton = document.getElementById("logout")
logoutButton.addEventListener('click', function (event) {
    event.preventDefault()
    location.replace("loginPg.html")
})

