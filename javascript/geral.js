/* GERAL */

window.addEventListener("load", function () {
    window.scroll({
        left: 0,
        top: innerHeight / 2
    });
});

var cenas = document.getElementsByClassName("scene");

window.onscroll = function () {
    for (let i = 0; i < cenas.length; i++) {

        var layer = cenas[i].querySelectorAll(".layer");

        if (window.scrollX + (innerWidth/2) >= cenas[i].offsetLeft) {
            for(let z=0; z<layer.length; z++){

                setTimeout(addClass(layer[z]), 2000);

                function addClass (layer) {
                    layer.classList.add("is-showing");
                }
            }
        }
    }

    if (window.scrollX >= innerWidth * 4) {
        var seta = document.querySelectorAll('#seta path');

        for (let i = 0; i < seta.length; i++) {

            seta[i].style.cssText = 'animation-name: off-zero; \n' +
                                    'animation-duration: 0.25s; \n' +
                                    'animation-timing-function: ease-in-out; \n' +
                                    'animation-iteration-count: 1; \n' +
                                    'animation-fill-mode: forwards';

            document.querySelector('#seta path:nth-child(' + (i + 1) + ')').style.animationDelay = i/4 + 's';

        }
    }

    if (window.scrollX >= innerWidth * 5) {
        var anotacao1 = document.querySelectorAll('#anotacao1 path');

        for (let i = 0; i < anotacao1.length; i++) {

        anotacao1[i].style.cssText = 'animation-name: off-zero; \n' +
                                     'animation-duration: 0.25s; \n' +
                                     'animation-timing-function: ease-in-out; \n' +
                                     'animation-iteration-count: 1; \n' +
                                     'animation-fill-mode: forwards';

        document.querySelector('#anotacao1 path:nth-child(' + (i + 1) + ')').style.animationDelay = i/4 + 's';

        document.getElementById('evolucao-1').style.cssText =  'animation: showEvolution;\n' +
                                                                        'animation-duration: 1s;\n' +
                                                                        'animation-iteration-count: 1;\n' +
                                                                        'animation-timing-function: ease-in-out;\n' +
                                                                        'animation-fill-mode: forwards;';

        document.getElementById('evolucao-2').style.cssText =  'animation-name: showEvolution;\n' +
                                                                        'animation-duration: 1s;\n' +
                                                                        'animation-delay: 1s;\n' +
                                                                        'animation-iteration-count: 1;\n' +
                                                                        'animation-timing-function: ease-in-out;\n' +
                                                                        'animation-fill-mode: forwards';

        document.getElementById('evolucao-3').style.cssText =  'animation-name: showEvolution;\n' +
                                                                        'animation-duration: 1s;\n' +
                                                                        'animation-delay: 2s;\n' +
                                                                        'animation-iteration-count: 1;\n' +
                                                                        'animation-timing-function: ease-in-out;\n' +
                                                                        'animation-fill-mode: forwards';

        document.getElementById('evolucao-4').style.cssText =  'animation-name: showEvolution;\n' +
                                                                        'animation-duration: 1s;\n' +
                                                                        'animation-delay: 3s;\n' +
                                                                        'animation-iteration-count: 1;\n' +
                                                                        'animation-timing-function: ease-in-out;\n' +
                                                                        'animation-fill-mode: forwards';

        document.getElementById('evolucao-5').style.cssText =  'animation-name: showEvolution;\n' +
                                                                        'animation-duration: 1s;\n' +
                                                                        'animation-delay: 4s;\n' +
                                                                        'animation-iteration-count: 1;\n' +
                                                                        'animation-timing-function: ease-in-out;\n' +
                                                                        'animation-fill-mode: forwards';

        }
    }

    if (window.scrollX >= innerWidth * 7) {
        var anotacao2 = document.querySelectorAll('#anotacao2 path');

        for (let i = 0; i < anotacao2.length; i++) {

            anotacao2[i].style.cssText = 'animation-name: off-zero; \n' +
                                         'animation-duration: 0.25s; \n' +
                                         'animation-timing-function: ease-in-out; \n' +
                                         'animation-iteration-count: 1; \n' +
                                         'animation-fill-mode: forwards';

            document.querySelector('#anotacao2 path:nth-child(' + (i + 1) + ')').style.animationDelay = i/4 + 's';

        }
    }
};

/* NAVEGAÇÃO */

var w = window.innerWidth;

document.getElementById("home").addEventListener("click", function () {
    window.scroll({
        left: 0,
        top: innerHeight / 2,
        behavior: "smooth"
    });
});

document.querySelector(".botao-mostrar").addEventListener("click", function () {
    document.querySelector(".itens").classList.toggle("show");
});

document.getElementById("1").addEventListener("click", function () {

    window.scroll({
        left: w,
        top: innerHeight / 2,
        behavior: "smooth"
    });
});

document.getElementById("2").addEventListener("click", function () {

    window.scroll({
        left: w * 2,
        top: innerHeight / 2,
        behavior: "smooth"
    });
});

document.getElementById("3").addEventListener("click", function () {
    console.log(w);
    console.log(w * 3);

    window.scroll({
        left: w * 3,
        top: innerHeight / 2,
        behavior: "smooth"
    });
});

document.getElementById("4").addEventListener("click", function () {
    window.scroll({
        left: w * 4,
        top: innerHeight / 2,
        behavior: "smooth"
    });
});

document.getElementById("5").addEventListener("click", function () {
    window.scroll({
        left: w * 5,
        top: innerHeight / 2,
        behavior: "smooth"
    });
});

document.getElementById("6").addEventListener("click", function () {
    window.scroll({
        left: w * 6,
        top: innerHeight / 2,
        behavior: "smooth"
    });
});

document.getElementById("7").addEventListener("click", function () {
    window.scroll({
        left: w * 7,
        top: innerHeight / 2,
        behavior: "smooth"
    });
});

document.getElementById("8").addEventListener("click", function () {
    window.scroll({
        left: w * 8,
        top: innerHeight / 2,
        behavior: "smooth"
    });
});

document.getElementById("9").addEventListener("click", function () {
    window.scroll({
        left: w * 9,
        top: innerHeight / 2,
        behavior: "smooth"
    });
});

document.getElementById("creditos").addEventListener("click", function () {
    window.scroll({
        left: w * 10,
        top: innerHeight / 2,
        behavior: "smooth"
    });
});

/* Página 4 */

var eyeBall = document.querySelectorAll("#olhos svg circle");
var eyes = document.getElementsByClassName('eye');

var rightLimitLeftEye = eyes[1].getPointAtLength(eyes[1].getTotalLength() - 10).x;
var leftLimitLeftEye = eyes[1].getPointAtLength(rightLimitLeftEye / 8).x;

var rightLimitRightEye = eyes[0].getPointAtLength(eyes[0].getTotalLength() - 5).x;
var leftLimitRightEye = eyes[0].getPointAtLength(rightLimitRightEye / 30).x;

function moveEyeX(eye, ball, rightLimit, leftLimit) {

    var espacoX = rightLimit - leftLimit;

    document.addEventListener('mousemove', function () {

        var x = espacoX * event.clientX / window.innerWidth;

        ball.setAttribute("cx", leftLimit + x);
    });
}

moveEyeX(eyes[1], eyeBall[1], rightLimitLeftEye, leftLimitLeftEye);
moveEyeX(eyes[0], eyeBall[0], rightLimitRightEye, leftLimitRightEye);

/* Página 5 */

document.querySelector(".familia img").addEventListener('mouseover', function () {
    this.style.cssText = 'animation-name: grow;\n' +
        'animation-duration: 2s;\n' +
        'animation-fill-mode: forwards;';
});

document.querySelector(".familia img").addEventListener('mouseout', function () {
    this.style.cssText = 'animation-name: shrink;\n' +
        'animation-duration: 2s;\n' +
        'animation-fill-mode: forwards;';
});

