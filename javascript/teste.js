/*unction loadJSON(callback) {
    var xobj = new XMLHttpRequest();
    xobj.overrideMimeType("application/json");
    xobj.open('GET', 'json/imagens.json', true); // Replace 'appDataServices' with the path to your file

    xobj.onreadystatechange = function () {
        if (xobj.readyState == 4 && xobj.status == "200") {
            console.log("entrou no if");
            // Required use of an anonymous callback as .open will NOT return a value but simply returns undefined in asynchronous mode
            callback(xobj.responseText);
        }
    };
    xobj.send(null);
}

function init() {

    loadJSON(function(response) {
        // Parsing JSON string into object
        var actual_JSON = JSON.parse(response);
        console.log(actual_JSON);
    });
}

init();*/

/*unction load() {
    var mydata = JSON.parse(imagens);
    console.log(mydata);
}

load();*/
window.scroll(2000, 300);