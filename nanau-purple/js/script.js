//alert("Bienvenue sur un site aussi oldschool que stylé !")

/*

document.getElementById("search-btn").onclick = function f1()
{
  alert("form");
}

function f1()
    {
       alert(document.getElementById("searchthis"));
       //form validation that recalls the page showing with supplied inputs.
    }

*/

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

function popup()
{
    width = 300;
    height = 200;
    if(window.innerWidth)
    {
        var left = (window.innerWidth-width)/2;
        var top = (window.innerHeight-height)/2;
    }
    else
    {
        var left = (document.body.clientWidth-width)/2;
        var top = (document.body.clientHeight-height)/2;
    }
    window.open('formulaire.html','Recherche avancée','menubar=no, scrollbars=no, top='+top+', left='+left+', width='+width+', height='+height+'');
}