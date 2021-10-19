var imgbase = document.getElementById("base");
var produ = document.getElementById("Productos");
var value = document.getElementById("Valores");
var cost = document.getElementById("Costos");
var net = document.getElementById('total');
var nuperson = 0;
var valper =0;
var relleno = "";
var pf =0;
var decorado = "";
var pd=0;
var netv = 0;
//Ticket Personas
var mostrarpersona = document.createElement('p');
mostrarpersona.textContent = "Número de Personas: ";
produ.appendChild(mostrarpersona);
var mostrarvalor = document.createElement('p');
mostrarvalor.textContent = "N/S";
value.appendChild(mostrarvalor);
var mostrarcosto = document.createElement('p');
mostrarcosto.textContent = "N/S";
cost.appendChild(mostrarcosto);
//Ticket relleno
var mostrarrelle = document.createElement('p');
mostrarrelle.textContent = "Relleno Seleccionado: ";
produ.appendChild(mostrarrelle);
var mostrarvalorre = document.createElement('p');
mostrarvalorre.textContent = "N/S";
value.appendChild(mostrarvalorre);
var mostrarcostore = document.createElement('p');
mostrarcostore.textContent = "0";
cost.appendChild(mostrarcostore);
//Ticket dacorado
var mostrardeco = document.createElement('p');
mostrardeco.textContent = "Decorado Seleccionado: ";
produ.appendChild(mostrardeco);
var mostrardecov = document.createElement('p');
mostrardecov.textContent = "N/S";
value.appendChild(mostrardecov);
var mostrardecoc = document.createElement('p');
mostrardecoc.textContent = "0";
cost.appendChild(mostrardecoc);
//total
var mostrartotal = document.createElement('p');
mostrartotal.textContent=netv;
net.appendChild(mostrartotal);
//variables mostrar productos
  var unNodoTitle = document.createElement('h5');
  unNodoTitle.classList.add('col-sm-12', 'alert', 'alert-custom', 'text-center');
  unNodoTitle.textContent = "Base";
  imgbase.appendChild(unNodoTitle);
//base del pastel
  var unNodo = document.createElement('div');
  unNodo.classList.add('div','col-sm-12', 'text-center');

  var unNodoCardBody = document.createElement('div');
  unNodoCardBody.classList.add('div');

  var unNodoImagen = document.createElement('img');
  unNodoImagen.classList.add('img-fluid');
  unNodoImagen.setAttribute('src', 'Images/crea/crea1.png',);
  unNodoImagen.style.width='400px';
  unNodoImagen.style.height='300px';

  unNodoCardBody.appendChild(unNodoImagen);
  unNodo.appendChild(unNodoCardBody);
  imgbase.appendChild(unNodo);

//precios - personas
function agregar10(){
  nuperson=10;
  valper=60;
  unNodoTitle.textContent = "10 Personas";
  unNodoImagen.style.width='400px';
  unNodoImagen.style.height='300px';
}
function agregar30(){
  nuperson=30;
  valper=180;
  unNodoTitle.textContent = "30 Personas";
  unNodoImagen.style.width='450px';
  unNodoImagen.style.height='350px';
}
function agregar50(){
  nuperson=50;
  valper=300;
  unNodoTitle.textContent = "50 Personas";
  unNodoImagen.style.width='500px';
  unNodoImagen.style.height='400px';
}

//rellenos
function ref(){
  relleno="Frutas";
  pf=20;
  switch (nuperson) {
    case 10:
        unNodoTitle.textContent = "10 Personas - Frutas";
      break;
      case 30:
          unNodoTitle.textContent = "30 Personas - Frutas";
        break;
        case 50:
            unNodoTitle.textContent = "50 Personas - Frutas";
          break;
  }

unNodoImagen.setAttribute('src', 'Images/crea/crea4.png',);
}
function rec(){
  relleno="Chocolate";
  pf=40;
  switch (nuperson) {
    case 10:
        unNodoTitle.textContent = "10 Personas - Chocolate";
      break;
      case 30:
          unNodoTitle.textContent = "30 Personas - Chocolate";
        break;
        case 50:
            unNodoTitle.textContent = "50 Personas - Chocolate";
          break;
  }
unNodoImagen.setAttribute('src', 'Images/crea/crea3.png',);
}
function ret(){
  relleno="Tres Leches";
  pf=50;
  switch (nuperson) {
    case 10:
        unNodoTitle.textContent = "10 Personas - Tres Leches";
      break;
      case 30:
          unNodoTitle.textContent = "30 Personas - Tres Leches";
        break;
        case 50:
            unNodoTitle.textContent = "50 Personas - Tres Leches";
          break;
  }
unNodoImagen.setAttribute('src', 'Images/crea/crea2.png',);
}

//Decorados
function des(){
  decorado="Sencillo";
  pd=80;
  switch (relleno) {
    case "Frutas":
      unNodoTitle.textContent = "Frutas - Sencillo";
      unNodoImagen.setAttribute('src', 'Images/crea/crea4_1.png',);
      break;
    case "Chocolate":
      unNodoTitle.textContent = "Chocolate - Sencillo";
      unNodoImagen.setAttribute('src', 'Images/crea/crea3_1.png',);
      break;
    case "Tres Leches":
      unNodoTitle.textContent = "Tres Leches - Sencillo";
      unNodoImagen.setAttribute('src', 'Images/crea/crea2_1.png',);
      break;
    default:

  }
}
function dem(){
  decorado="Muy Decorado";
  pd=160;
  switch (relleno) {
    case "Frutas":
      unNodoTitle.textContent = "Frutas - Muy Decorado";
      unNodoImagen.setAttribute('src', 'Images/crea/crea4_2.png',);
      break;
    case "Chocolate":
      unNodoTitle.textContent = "Chocolate - Muy Decorado";
      unNodoImagen.setAttribute('src', 'Images/crea/crea3_2.png',);
      break;
    case "Tres Leches":
      unNodoTitle.textContent = "Tres Leches - Muy Decorado";
      unNodoImagen.setAttribute('src', 'Images/crea/crea2_2.png',);
      break;
    default:

  }
}
function dee(){
  decorado="Especial";
  pd=200;
  switch (relleno) {
    case "Frutas":
      unNodoTitle.textContent = "Frutas - Especial";
      unNodoImagen.setAttribute('src', 'Images/crea/crea4_3.png',);
      break;
    case "Chocolate":
      unNodoTitle.textContent = "Chocolate - Especial";
      unNodoImagen.setAttribute('src', 'Images/crea/crea3_3.png',);
      break;
    case "Tres Leches":
      unNodoTitle.textContent = "Tres Leches - Especial";
      unNodoImagen.setAttribute('src', 'Images/crea/crea2_3.png',);
      break;
    default:

  }
}

//total - Limpiar
function calcularTotal(){
  netv = valper+pf+pd;
 mostrartotal.textContent=netv;
  }
//Funciones de personas
function mostrarv(){
  switch (nuperson) {
    case 10:
      mostrarvalor.textContent = "10";
      break;
      case 30:
        mostrarvalor.textContent = "30";
        break;
        case 50:
          mostrarvalor.textContent = "50";
          break;
    default:mostrarvalor.textContent = "N/S";
  }
}
function mostrarc(){
  switch (valper) {
    case 60:
      mostrarcosto.textContent = "60";
      break;
      case 180:
        mostrarcosto.textContent = "180";
        break;
        case 300:
          mostrarcosto.textContent = "300";
          break;
    default:mostrarcosto.textContent = "0";

    }
  }
  //funciones de relleno
function mostrarr(){
    switch (pf) {
      case 20:
        mostrarvalorre.textContent = "Frutas";
        break;
        case 40:
          mostrarvalorre.textContent = "Chocolate";
          break;
          case 50:
            mostrarvalorre.textContent = "Tres Leches";
            break;
      default:mostrarvalorre.textContent = "no Seleccionado";

      }
    }
function mostrartr(){
    switch (pf) {
      case 20:
        mostrarcostore.textContent = "20";
        break;
        case 40:
          mostrarcostore.textContent = "40";
          break;
        case 50:
          mostrarcostore.textContent = "50";
          break;
      default:mostrarcostore.textContent = "0";

  }
}

// Funciones deco
function mostrartd(){
    switch (pd) {
      case 80:
        mostrardecoc.textContent = "80";
        break;
        case 160:
          mostrardecoc.textContent = "160";
          break;
        case 200:
          mostrardecoc.textContent = "200";
          break;
      default:mostrardecoc.textContent = "0";

  }
}
function mostrard(){
    switch (pd) {
      case 80:
        mostrardecov.textContent = "Sencillo";
        break;
        case 160:
          mostrardecov.textContent = "Muy Decorado";
          break;
        case 200:
          mostrardecov.textContent = "Especial";
          break;
      default:mostrardecov.textContent = "No Seleccionado";

  }
}



function lim(){
  alert('hula');
  nuperson = 0;
  valper =0;
  relleno = "";
  pf =0;
  decorado = "";
  pd=0;
  unNodoTitle.textContent = "Base";
  unNodoImagen.setAttribute('src', 'Images/crea/crea1.png');
}
