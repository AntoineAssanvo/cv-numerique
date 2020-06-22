"use strict";

$(document).ready(function () {
  const toggleButton = document.getElementsByClassName('toggle-button')[0]
  const navbarLinks = document.getElementsByClassName('navbar-links')[0]

  toggleButton.addEventListener('click', () => {
    navbarLinks.classList.toggle('active')
  })
  // quand je clic sur le fleche de droite j'active ma fonction qui montre l'image suivante
  $('.arrow-r').on('click', function () {
    //je creer une variable pour les images precedente et suivante, Var CurrentImg est l'amage qui est monter sur le navigateur
    var currentImg = $('.active');
    var nextImg = currentImg.next();

    if (nextImg.length) {
      currentImg.removeClass('active').css('z-index', -10);
      nextImg.addClass('active').css('z-index', 10);
    }
  });
  // je fais la meme chose pour la fleche de gauche
  $('.arrow-l').on('click', function () {
    var currentImg = $('.active');
    var prevImg = currentImg.prev();

    if (prevImg.length) {
      currentImg.removeClass('active').css('z-index', -10);
      prevImg.addClass('active').css('z-index', 10);
    }
  });

  // je montre un page pop up quand l'utilisateur veut ecrire un message dans le section "message"
  $("textarea").on('click', function () {
    alert("Elargissez la section pour ecrire !");
    // je stop le message pop up 
    return false;
  });
});