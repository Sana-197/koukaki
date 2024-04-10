//slideshow characters//

const swiper = new Swiper('.swiper', {

   effect: 'coverflow',
    centeredSlides: true,
    slidesPerView: 'auto',
    speed: 1500,
    grabCursor: true,
     loop: true, 
     loopedSlides: 5,
    autoplay: {
        delay: 3000, 
        disableOnInteraction: false, 
    },
    coverflowEffect: {
      slideShadows: false,
      rotate: 60,
      stretch: 0,
      depth: 40,
      modifier: 1
    },
  });

  //Animation nuages//


const bigCloud = document.querySelector('.big_cloud');
const littleCloud = document.querySelector('.little_cloud');


const sectionOffsetTop = document.getElementById('place').offsetTop; // Récupérer la position initiale de la section//


let prevScrollPosition = window.scrollY;// Variables pour stocker la position de défilement précédente//


window.addEventListener('scroll', function() {
 
  const scrollPosition = window.scrollY; // nous permet de savoir combien de pixels la page a été défilée vers le bas à partir du haut de la fenêtre de visualisation, ou se trouve l'utilisateur sur la page//

  
  const parallaxValue = (scrollPosition - sectionOffsetTop) / 2;// Calculer la différence de défilement depuis la dernière position//

  
  const translationX = Math.min(parallaxValue, 300); // limite à 300 px sur la gauche //

  
  bigCloud.style.transform = `translateX(${-translationX}px)`;// Appliquer le déplacement des nuages en utilisant la propriété transform, sa valeur négative permet de déplacer vers la gauche //
  littleCloud.style.transform = `translateX(${-translationX}px)`; // interpolation de chaînes de caractères? permet de concaténer la valeur de translationX avec la chaîne de caractères PX//
});

//Menu burger//

const burgerBtn = document.getElementById('burger-btn');
const fullscreenMenu = document.querySelector('.fullscreenMenu');
const menuLinks = document.querySelectorAll('.fullscreenMenu ul li a');


function closeMenu() {
    fullscreenMenu.classList.remove('active');// Fonction pour fermer le menu//
    burgerBtn.classList.remove('active');
}


menuLinks.forEach(link => {
    link.addEventListener('click', closeMenu);// Ajouter un écouteur d'événement à chaque lien du menu pour fermer le menu//
});


burgerBtn.addEventListener('click', () => {// Ajouter un écouteur d'événement au bouton burger pour afficher ou masquer le menu//
    fullscreenMenu.classList.toggle('active');
    burgerBtn.classList.toggle('active');
});


//Accélération animation fleur lors du scroll//

const elementsWithAnimation = document.querySelectorAll('.orchidMenu, .flowerMenu, .sunflowerMenu, .randomflowerMenu, .hibiscusMenu, .story__article::after, .story h2::after, #studio h2::before, #studio h2::after, .nominations_oscars::before, .nominations_oscars::after, .site-footer::before, .site-footer::after, .site-footer ul::after');

function adjustAnimationSpeed() {
  const scrollTop = window.scrollY; //récup la quantité de défilement de la page//
  
  const animationDuration = Math.max(15 - (scrollTop / 100), 0.5); //La valeur de animationDuration est calculée en soustrayant le défilement vertical de la page divisé par 100 de 15//
  
  elementsWithAnimation.forEach(element => {
    element.style.animationDuration = `${animationDuration}s`; //incorporation d'une variable dans une chaîne de caractères ajouté à s qui précise la durée de l'animation//
  });
}

window.addEventListener('scroll', adjustAnimationSpeed);


















