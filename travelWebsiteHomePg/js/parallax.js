let moonImg = document.getElementById("moon")
let grassImg = document.getElementById("grass")
let leftGateImg = document.getElementById("leftGate")
let rightGateImg = document.getElementById("rightGate")
let leftTreeImg = document.getElementById("leftTree")
let rightTreeImg = document.getElementById("rightTree")
debugger
window.addEventListener("scroll",()=>
{
    let scrolling = window.scrollY;
    console.log(scrolling);

    leftGateImg.style.left = scrolling * 1 + 'px';
    rightGateImg.style.right = scrolling * 1 + 'px';
    leftTreeImg.style.top = scrolling * 0.5 + 'px';
    // rightTreeImg.style.bottom = scrolling * 0.5 + 'px';

});