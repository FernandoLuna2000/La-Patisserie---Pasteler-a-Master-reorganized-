var formulario = document.getElementById("Form")
Generar();

function Generar(){
  //ID
  var nodouno = document.createElement('div');
  nodouno.classList.add('col-sm-12', 'row');

  var nododos = document.createElement('div');
  nododos.classList.add('col-sm-1');

  var did = document.createElement('div');
  nododos.classList.add('col-sm-2', 'row');

  var fid = document.createElement('div');

  var tid =document.createElement('h5');
  tid.textContent= "ID";

  var inid = document.createElement('input');
  inid.classList.add('form-control', 'text-center');
  inid.type="number";
  inid.name="ID";

//Nombre del producto
  var nodotres=document.createElement('div');
  nodotres.classList.add('col-sm-5');

  var fnp =document.createElement('div');

  var tnp =document.createElement('h5');
  tnp.textContent= "Nombre del Producto";

  var inp = document.createElement('input');
  inp.classList.add('form-control', 'text-center');
  inp.name="Nombre";

  //Precio del Producto
  var nodocuatro=document.createElement('div');
  nodocuatro.classList.add('col-sm-3');

  var fpp =document.createElement('div');

  var tpp =document.createElement('h5');
  tpp.textContent= "Precio del Producto";

  var ipp = document.createElement('input');
  ipp.classList.add('form-control', 'text-center');
  ipp.name="Precio";
  ipp.type="number";
  //cantidad
  var nodocinco=document.createElement('div');
  nodocinco.classList.add('col-sm-2');

  var fca =document.createElement('div');

  var tca =document.createElement('h5');
  tca.textContent= "Cantidad";

  var ica = document.createElement('input');
  ica.classList.add('form-control', 'text-center');
  ica.name="Cantidad";
  ica.type="number";

//Segundo renglón
var nodoseis = document.createElement('div');
nodoseis.classList.add('col-sm-11', 'row');
//tipo de Relleno
var dtr = document.createElement('div');
dtr.classList.add('col-sm-3', 'row');

var ttr =document.createElement('h5');
ttr.textContent= "Tipo Relleno";

var str = document.createElement('select');
str.classList.add('form-control', 'text-center');
str.name="Relleno";

var opctr1 = document.createElement('option')
opctr1.textContent="Frutas";
var opctr2 = document.createElement('option')
opctr2.textContent="Chocolate";
var opctr3 = document.createElement('option')
opctr3.textContent="Tres Leches";


//separaciónse
var sep = document.createElement('div');
sep.classList.add('col-sm-1', 'row');
var sep1 = document.createElement('div');
sep1.classList.add('col-sm-1', 'row');

//tipo de Adorno
var dta = document.createElement('div');
dta.classList.add('col-sm-3', 'row');

var tta =document.createElement('h5');
tta.textContent= "Tipo Adorno";

var sta = document.createElement('select');
sta.classList.add('form-control', 'text-center');
sta.name="Adorno";

var opcta1 = document.createElement('option')
opcta1.textContent="Sencillo";
var opcta2 = document.createElement('option')
opcta2.textContent="Muy Decorado";
var opcta3 = document.createElement('option')
opcta3.textContent="Especial";

//# Personas
var dnp = document.createElement('div');
dnp.classList.add('col-sm-3', 'row');

var tnup =document.createElement('h5');
tnup.textContent= "# de Personas";

var snp = document.createElement('select');
snp.classList.add('form-control', 'text-center');
snp.name="Personas";

var opcnp1 = document.createElement('option')
opcnp1.textContent="10";
var opcnp2 = document.createElement('option')
opcnp2.textContent="30";
var opcnp3 = document.createElement('option')
opcnp3.textContent="50";
//Imagen
var dimg = document.createElement('div');
dimg.classList.add('row', 'col-sm-6');

var timg = document.createElement('h5');
timg.textContent="Imagen";

var iimg = document.createElement('input');
iimg.classList.add("form-control-file")
iimg.type="File";
iimg.name="Imagen";


//Invocar 1er renglón
    fid.appendChild(tid);
    fid.appendChild(inid);
    did.appendChild(fid);
    nododos.appendChild(did);
    fnp.appendChild(tnp);
    fnp.appendChild(inp);
    fpp.appendChild(tpp);
    fpp.appendChild(ipp);
    fca.appendChild(tca);
    fca.appendChild(ica);
    nodocinco.appendChild(fca);
    nodocuatro.appendChild(fpp);
    nodotres.appendChild(fnp);
    nodouno.appendChild(nododos);
    nodouno.appendChild(nodotres);
    nodouno.appendChild(nodocuatro);
    nodouno.appendChild(nodocinco);

//invocar 2do renglón
    dtr.appendChild(ttr);
    dtr.appendChild(str);
    dta.appendChild(tta);
    dta.appendChild(sta);
    dnp.appendChild(tnup);
    dnp.appendChild(snp);
    dimg.appendChild(timg);
    dimg.appendChild(iimg);
    str.appendChild(opctr1);
    str.appendChild(opctr2);
    str.appendChild(opctr3);
    sta.appendChild(opcta1);
    sta.appendChild(opcta2);
    sta.appendChild(opcta3);
    snp.appendChild(opcnp1);
    snp.appendChild(opcnp2);
    snp.appendChild(opcnp3);
    nodoseis.appendChild(dtr);
    nodoseis.appendChild(sep);
    nodoseis.appendChild(dta);
    nodoseis.appendChild(sep1);
    nodoseis.appendChild(dnp);
    nodoseis.appendChild(dimg);
//final
    formulario.appendChild(nodouno);
    formulario.appendChild(nodoseis);
}
