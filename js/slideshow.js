

    $("document").ready(function(){
     
    //c’est faisable via CSS :D
    //ajouter une position absolu pour les images et une position relative au conteneur afin de les aligner les unes au dessous des autres
    $("#slideshow img").css("position","absolute");
    $("#slideshow").css("position","relative");
     
    //masquer les images qui possedent un index supérieur à zero pour afficher les images en ordre
    $("#slideshow img:gt(0)").hide();
     
    //ajouter les buttons suivant et précedent ,aussi c’est faisable via le DOM
    $("#slideshow").append("<a class="prev" href="#">précédent</a> <a class="next" href="#">suivant</a>");
    $("#slideshow").append("<div class="title"></div>");
     
    //récupérer l’attribue ALT de la premiere image
    var $title = $("#slideshow img:visible").attr("alt");
    //afficher l’attribue pour la premiere image visible
    $("#slideshow div.title").text($title);
     
    //lorsque le boutton suivant est clické
    $("#slideshow a.next").click(function(){
    //récupérer l’image suivante
    var $img_suiv = $("#slideshow img:visible").next("img");
    //récupérer l’attribue alt de l’image suivante
    var $title_next = $("#slideshow img:visible").next("img").attr("alt");
    //tester si on est arrivé à la fin de slideshow pour récuperer le alt de la premiere image
    if($img_suiv.length<1) $title_next = $("#slideshow img:first").attr("alt");
    $("#slideshow div.title").text($title_next);
    //tester si on est arrivé à la fin de slideshow pour récuperer la premiere image
    if($img_suiv.length<1) $img_suiv = $("#slideshow img:first");
    //appliquer un effet de fadeout a l’image courante
    $("#slideshow img:visible").fadeOut();
    //afficher l’image suivante avec un effet fadeIn
    $img_suiv.fadeIn();
    return false;
    });
     
    //lorsque le boutton precedent est clické
    $("#slideshow a.prev").click(function(){
    var $img_prev = $("#slideshow img:visible").prev("img");
    var $title_prev = $("#slideshow img:visible").prev("img").attr("alt");
    if($img_prev.length<1) $title_prev = $("#slideshow img:last").attr("alt");
    $("#slideshow div.title").text($title_prev);
    if($img_prev.length<1) $img_prev = $("#slideshow img:last");
    $("#slideshow img:visible").fadeOut();
    $img_prev.fadeIn();
    return false;
    });
     
    });


