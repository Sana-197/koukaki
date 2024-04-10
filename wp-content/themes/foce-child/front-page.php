<?php

get_header();
?>

    <main id="primary" class="site-main">
        <section class="banner">
            <img class="banner__background" src="<?php echo get_template_directory_uri() . '\assets\images\banner.png'; ?> " alt="banner Fleurs d'oranger & chats errants">
                <video class="banner__video" width="1440" autoplay="autoplay" muted="" loop="infinite">
                    <source src="<?php echo get_theme_file_uri() . '\assets\video\Studio_Koukaki_video_header_sans_son.mp4'; ?>'; ?>"
                        type="video/mp4">
                </video>   
                <img class="banner__logo" src="<?php echo get_theme_file_uri() . '\assets\images\logo.png'; ?>"
      alt="Logo fleurs d'oranger & chats errants"> 
        </section>
        <section id="#story" class="story fade-in ">
            <h2>
            <div data-aos="fade-up"
                data-aos-duration="3000">
                <span class="story__title">L'histoire</span>
             </div>
            </h2>
            
            <article id="" class="story__article">
                <p><?php echo get_theme_mod('story'); ?></p>
            </article>
            
            <article>
            <?php get_template_part( 'template-parts/characters-slideshow' ); ?>
            </article>


            <article id="place" class="place">
               <div>
                    <h3>
                    <div data-aos="fade-up"
                data-aos-duration="2000">
                      <span class= "place__title">Le Lieu</span>
                      </div>
                    </h3>
                    <p><?php echo get_theme_mod('place'); ?></p>
                </div>
                 <!-- Ajout des images des nuages-->
                 <div class= "clouds">
                <img class="big_cloud" src="\wp-content\themes\foce-child\assets\images\big_cloud.png" alt="Image du grand nuage">
                <img class="little_cloud" src="\wp-content\themes\foce-child\assets\images\little_cloud.png" alt=" Image du petit nuage">
            </div>

            </article>
        </section>


        <section id="studio" class="studio fade-in ">
         <h2>
         <div data-aos="fade-up"
     data-aos-duration="2000">
         <span class= "studio__title">Studio Koukaki</span>
         </div>
        </h2>
             <div>
                <p>Acteur majeur de l’animation, Koukaki est un studio intégré fondé en 2012 qui créé, produit et distribue des programmes originaux dans plus de 190 pays pour les enfants et les adultes. Nous avons deux sections en activité : le long métrage et le court métrage. Nous développons des films fantastiques, principalement autour de la culture de notre pays natal, le Japon.</p>
                <p>Avec une créativité et une capacité d’innovation mondialement reconnues, une expertise éditoriale et commerciale à la pointe de son industrie, le Studio Koukaki se positionne comme un acteur incontournable dans un marché en forte croissance. Koukaki construit chaque année de véritables succès et capitalise sur de puissantes marques historiques. Cette année, il vous présente “Fleurs d’oranger et chats errants”.</p>
            </div>
            </section>

            <!-- Nomination aux oscars-->
<section id="nominations" class="nominations_oscars fade-in" >
    
        <div class="nominations__title">
            <img src= "\wp-content\themes\foce-child\assets\images\nomination_oscars_background.png" alt="background de la nominaton aux oscars">
            <h3 data-aos="fade-up" data-aos-duration="2000"> Fleurs d'oranger & chats errants<br> est nominé aux Oscars Short <br>Film Animated de 2022 !</h3>
        </div>
        <img class="nominations__img" src="\wp-content\themes\foce-child\assets\images\nomination_oscars.png" alt="image de la nomiation aux oscars"/>
    
 </section>
 <!-- Ajout du lien vers le script CDN JavaScript de AOS -->
 <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
  AOS.init();
</script>
<!-- Ajout du lien vers le script CDN JavaScript de Swiper Js -->
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    </main><!-- #main -->

<?php
get_footer();
