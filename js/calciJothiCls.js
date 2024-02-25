let num1 = document.getElementById("num1")
let num2 = document.getElementById("num2")
let resultArea = document.getElementById("result")

let addButton = document.getElementById("add")
let subButton = document.getElementById("sub")
let multiButton = document.getElementById("multi")
let divButton = document.getElementById("div")
let modButton = document.getElementById("mod")


addButton.addEventListener('click',function(){
    let total = parseInt(num1.value) + parseInt(num2.value)
    resultArea.textContent = total
})

subButton.addEventListener('click',function(){
    resultArea.textContent = parseInt(num1.value) - parseInt(num2.value)
})

multiButton.addEventListener('click',function(){
    resultArea.textContent = parseInt(num1.value) * parseInt(num2.value)
})

divButton.addEventListener('click',function(){
    console.log("clicked")
    resultArea.textContent = parseInt(num1.value) / parseInt(num2.value)
})

modButton.addEventListener('click',function(){
    resultArea.textContent = parseInt(num1.value) % parseInt(num2.value)
})


