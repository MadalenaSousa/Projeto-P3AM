var w = Math.max(document.documentElement.clientWidth, window.innerWidth || 0);

document.getElementById("home").addEventListener("click", function () {
    window.scroll({
        left: 0,
        top: 0,
        behavior: "smooth"});
});

document.getElementById("paginas").addEventListener("click", function () {
    console.log("clique");
    document.querySelector("#paginas > div").classList.toggle("show");
});

document.getElementById("1").addEventListener("click", function () {
    window.scroll({
        left: w,
        top: 0,
        behavior: "smooth"});
});

document.getElementById("2").addEventListener("click", function () {
    window.scroll({
        left: w * 2,
        top: 0,
        behavior: "smooth"});
});

document.getElementById("3").addEventListener("click", function () {
    window.scroll({
        left: w * 3,
        top: 0,
        behavior: "smooth"});
});

document.getElementById("4").addEventListener("click", function () {
    window.scroll({
        left: w * 4,
        top: 0,
        behavior: "smooth"});
});

document.getElementById("5").addEventListener("click", function () {
    window.scroll({
        left: w * 5,
        top: 0,
        behavior: "smooth"});
});

document.getElementById("6").addEventListener("click", function () {
    window.scroll({
        left: w * 6,
        top: 0,
        behavior: "smooth"});
});

document.getElementById("7").addEventListener("click", function () {
    window.scroll({
        left: w * 7,
        top: 0,
        behavior: "smooth"});
});

document.getElementById("8").addEventListener("click", function () {
    window.scroll({
        left: w * 8,
        top: 0,
        behavior: "smooth"});
});

document.getElementById("9").addEventListener("click", function () {
    window.scroll({
        left: w * 9,
        top: 0,
        behavior: "smooth"});
});

document.getElementById("creditos").addEventListener("click", function () {
    window.scroll({
        left: w * 10,
        top: 0,
        behavior: "smooth"});
});

