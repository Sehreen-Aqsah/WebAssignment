
const text = "Welcome to My Portfolio! I'm Akshata :)";
let index = 0;

function typeEffect() {
    if (index < text.length) {
        document.getElementById("typewriter").innerHTML += text.charAt(index);
        index++;
        setTimeout(typeEffect, 100);
    }
}
window.onload = typeEffect;
