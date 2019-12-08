/* GERAL */

window.addEventListener("load", function () {
    window.scroll({
        left: 0,
        top: innerHeight/2
    });
});

window.onscroll = function () {
    console.log(window.scrollX);
};

/* NAVEGAÇÃO */

var w = window.innerWidth;

document.getElementById("home").addEventListener("click", function () {
    window.scroll({
        left: 0,
        top: innerHeight/2,
        behavior: "smooth"});
});

document.querySelector(".botao-mostrar").addEventListener("click", function () {
    document.querySelector(".itens").classList.toggle("show");
});

document.getElementById("1").addEventListener("click", function () {

    window.scroll({
        left: w,
        top: innerHeight/2,
        behavior: "smooth"});
});

document.getElementById("2").addEventListener("click", function () {

    window.scroll({
        left: w * 2,
        top: innerHeight/2,
        behavior: "smooth"});
});

document.getElementById("3").addEventListener("click", function () {
    console.log(w);
    console.log(w*3);

    window.scroll({
        left: w * 3,
        top: innerHeight/2,
        behavior: "smooth"});
});

document.getElementById("4").addEventListener("click", function () {
    window.scroll({
        left: w * 4,
        top: innerHeight/2,
        behavior: "smooth"});
});

document.getElementById("5").addEventListener("click", function () {
    window.scroll({
        left: w * 5,
        top: innerHeight/2,
        behavior: "smooth"});
});

document.getElementById("6").addEventListener("click", function () {
    window.scroll({
        left: w * 6,
        top: innerHeight/2,
        behavior: "smooth"});
});

document.getElementById("7").addEventListener("click", function () {
    window.scroll({
        left: w * 7,
        top: innerHeight/2,
        behavior: "smooth"});
});

document.getElementById("8").addEventListener("click", function () {
    window.scroll({
        left: w * 8,
        top: innerHeight/2,
        behavior: "smooth"});
});

document.getElementById("9").addEventListener("click", function () {
    window.scroll({
        left: w * 9,
        top: innerHeight/2,
        behavior: "smooth"});
});

document.getElementById("creditos").addEventListener("click", function () {
    window.scroll({
        left: w * 10,
        top: innerHeight/2,
        behavior: "smooth"});
});

/* Página 4 */

var eyeBall = document.querySelectorAll("#olhos svg circle");
var eyes = document.getElementsByClassName('eye');

function moveEyeX(eye, ball) {
    var rightLimit = eye.getTotalLength();
    var leftLimit = eye.getPointAtLength(rightLimit / 1.4).x;

    var espacoX = rightLimit - leftLimit;

    document.addEventListener('mousemove', function () {

        var x = espacoX * event.clientX / window.innerWidth;

        ball.setAttribute("cx", leftLimit + x);
    });
}

moveEyeX(eyes[1], eyeBall[1]);
