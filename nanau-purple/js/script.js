//alert("Bienvenue sur un site aussi oldschool que stylé !")

document.getElementById("search-btn").onclick = function f1()
{
  alert("form");
}

function f1()
    {
       alert("f1 called");
       //form validation that recalls the page showing with supplied inputs.
    }



//bouton lien aléatoire

function LienAuHasard()
{
    Url = new Array;
    base = "file:///C:/Users/marga/OneDrive/Documents/GitHub/Nanau_Purple/nanau-purple/pages/";
    Url[0] = "action.html";
    Url[1] = "horreur.html";
    Url[2] = "fantastique.html";
    Url[3] = "fiction.html";

    ChoixLien = Math.floor(Math.random() * Url.length);
    window.open(base + Url[ChoixLien],'_blank');
}

*/

var body = document.getElementsByTagName('body')[0],
    img = document.createElement('img'),
    imgTop = 100,
    imgLeft = 100,
    interval;

// Ajoute une image à la page
// Préférable à un appel à document.write()
img.src = '/img/img_exemples/droite.gif';
img.setAttribute('style', 'position:absolute;top:'+imgTop+'px;left:'+imgLeft+'px');
body.appendChild(img);

// Déplace l'image toutes les 100 millisecondes
function move(x,y) {
  interval = setInterval(function() {
    imgTop += y;
    imgLeft += x;
    img.style.top = imgTop + 'px';
    img.style.left = imgLeft + 'px';
  }, 100);
}

// Stoppe le déplacement de l'image
function stop() {
  clearInterval(interval);
}
