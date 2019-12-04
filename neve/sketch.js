var quantidade = 200;
var Xpos = [];
var Ypos = [];
var raio = [];
var direcao = [];


function setup() {
  createCanvas(400, 400);
  frameRate(30);

  for(var i = 0; i < quantidade; i++) {
  raio[i] = round(random(5, 1));
    Xpos[i] = random(0, width);
    Ypos[i] = random(0, height);
    direcao[i] = round(random(0, 1));
  }
}

function draw() {
  background(255);
fill(0);
 neve();
}

function neve() {
for(var i = 0; i < Xpos.length; i++) {
    
    ellipse(Xpos[i], Ypos[i],raio[i],raio[i]);   
   Ypos[i] +=raio[i] + direcao[i]; 
  
  
        if(Xpos[i] > width + raio[i] || Xpos[i] < -raio[i] || Ypos[i] > height + raio[i]) {
      Xpos[i] = random(0, width);
      Ypos[i] = -raio[i];
    }
  }
   
}







 