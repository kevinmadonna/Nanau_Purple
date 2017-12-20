//alert("Bienvenue sur un site aussi oldschool que stylé !")



document.getElementById("search-btn").onclick = function f1()
{
  alert("form");
}

function f1()
    {
       alert(document.getElementById("search"));
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
