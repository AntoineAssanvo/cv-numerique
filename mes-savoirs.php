<!DOCTYPE html>
<html lang="fr">
<?php
include("loads/head.php");
?>

<body>

  <!--CONTENT-->
  <?php
  include("loads/header.php");
  ?>

  <main>

    <section id="presentation" class="sect-savoir grid_wrap">
      <div class="square-box1 vertical-mode">
        <a href="#mes-competences" class="encrage"> Voir mes compétences</a>
      </div>
      <h1 class="main_title">Mes Savoirs</h1>
      <!-- menu vertical gauche-->
      <div class="square-box2 vertical-mode">
        <a href="#mes-projets" class="encrage"> Voir mes projets </a>
      </div>

      <div class="square-box3 vertical-mode">
        <a href="#contact" class="encrage"> Mes reseaux</a>
      </div>

      <!--<ICI c'est la section ou je montre mes competences techniques-->


      <div class="compt-part_1" data-aos="fade-right">
        <h2 class="mid-title ">Langages</h2>
        <!-- Je les mets sous forme de liste avec l'image en premiere et le paragraphe en inline-->
        <ul class="block_1">

          <li class="row_langage_web"> <img class="icon_img" src="pics_competences/html_icon.png" alt="icon html">
            <!-- Paragraphe-->
            <p class="para_li_group"> <span class="bolder">Front-End:</span> J'utilises généralement le langage <span class="bolder">HTML</span> pour créer mes pages web. </p>
          </li>

          <li class="row_langage_web"> <img class="icon_img" src="pics_competences/css_icon.png" alt=" icon css">
            <!-- Paragraphe-->
            <p class="para_li_group"> <span class="bolder">Front-End:</span> Également dans le développement front, le design de mes pages web sont conçu avec le <span class="bolder"> CSS</span> qui me permet de mettre en forme le contenu d'une page codé en HTML. </p>
          </li>
          <li class="row_langage_web"> <img class="icon_img transparent" src="pics_competences/JS.png" alt=" icon js">
            <!-- Paragraphe-->
            <p class="para_li_group"> <span class="bolder">Front-End:</span> J'ai des bases en <span class="bolder">JavaScript</span> qui sont nécessaire pour animer certains de mes projets.</p>
          </li>
          <li class="row_langage_web"> <img class="icon_img transparent" style="width: 5vw; height:5vh;" src="pics_competences/php.png" alt=" icon php">
            <!-- Paragraphe-->
            <p class="para_li_group"> <span class="bolder">Back-End:</span> Je me sers du <span class="bolder">Php</span> pour traiter des informations contenus dans des bases de données. Grâce au php je peux interroger <img src="pics_competences/sql.png" style="height: 4vh;" alt="my sql icon">. </p>
          </li>
        </ul>
      </div>


      <div id="mes-competences" class="compt-part_2" data-aos="fade-left">
        <h2 class="mid-title">Logiciels</h2>
        <ul class="block_2">

          <li class="row_langage_web"> <img class="icon_img" src="pics_competences/pss.png" alt="icon photoshop">

            <p class="para_li_group_2"> <span class="bolder">Adobe logiciel:</span> La plupart de mes designs sont crées avec <span class="bolder">Photoshop</span>.</p>
          </li>

          <li class="row_langage_web"> <img class="icon_img" src="pics_competences/indesign.png" alt=" icon indesign">

            <p class="para_li_group_2"> <span class="bolder">Adobe logiciel:</span> indesign me sert pour la realisation de document notamment sur des projets nécessitant un rapport detaillé et bien illustré. </p>
          </li>

          <li class="row_langage_web "> <img class="icon_img transparent" src="pics_competences/pr.png" alt=" icon css">

            <p class="para_li_group_2"> <span class="bolder">Adobe logiciel:</span> Pour éditer et monter des videos j'utilises <span class="bolder">Premiere Pro</span>. </p>
          </li>

          <li class="row_langage_web"> <img class="icon_img" src="pics_competences/sketch.png" alt=" icon sketch">

            <p class="para_li_group_2"> <span class="bolder">UX:</span> Au niveau UX et plus spécialement, la conception de maquette j'utilises <span class="bolder">Sketch</span>. </p>
          </li>

        </ul>
      </div>


    </section>

    <section class="sect-projets grid_wrap" id="mes-projets">

      <div class="sound_design">

        <h2 class="mid-title">Sound Design </h2>


        <p class="para" data-aos="fade-up">
          En ce qui concerne le domaine de la musique j'utilises un <span class="bolder">DAW</span> appellé <span class="bolder">Fl Studio</span> <img src="pics_competences/fl_studio.png" class="mao_img" alt="logo de fl studio">.<br>Je maîtrises également des <span class="bolder">plugings </span> vst's dont <span class="bolder">Massive</span> <img src="pics_competences/massive.png" class="mao_img" alt="">.</br>
          Pour le <span class="bolder">mastering</span> de mes sons je procède avec divers elements puis je m'aide de <span class="bolder">Ozone 8</span> <img src="pics_competences/Ozone.png" class="mao_img" alt="">. <br> Au niveau du <span class="bolder">traitement de l'audio </span> j'ai la chance d'avoir <span class="bolder">IZotope_RX7 </span> <img src="pics_competences/IZotope_RX7.png" class="mao_img" alt="">.</br>

        </p>
      </div>
      <div class="info-projet" data-aos="fade-right">
        <p class="para">Pour voir plus de projets visuels voir ma page: <a class="bolder" href="https://www.behance.net/Aassvx" target="blank" style="color: white;">Behance</a> </p>
      </div>
      <div class="info-projet_2" data-aos="fade-left">
        <p class="para">Pour écouter mes projets audios visitez ma page: <a class="bolder" href="https://soundcloud.com/genetilmusic" target="blank" style="color: rgb(215, 162, 59);">Soundcloud</a> et ma page <a class="bolder" href="https://open.spotify.com/artist/5CBPkBbRM2R58NITfkelMN?si=xQR_72QETaSyKO24YOqrMQ" target="blank" style="color: green;">Spotify</a> <br>
        </p>
      </div>
      <div class="container_slide">
        <h2 class="mid-title">Mes projets</h2>


        <div class="slider-outer">
          <img src="images_videos/arrow.png" class="arrow-l" alt="Prev">
          <div class="slider-inner">
            <img src="images_videos/GENETIL_LOGO_DUO_GREEN.png" class="active">
            <img src="images_videos/affiche_xi.png" alt="">
            <img src="images_videos/coverblack.png" alt="">
            <img src="images_videos/Wounacover.png" alt="">
            <img src="images_videos/Cover_Waiting_EDIT.JPG" alt="">

          </div>
          <img src=" images_videos/arrow.png" class="arrow-r" alt="Next">
        </div>
      </div>
      </div>




    </section>
  </main>
  <!--FOOOTER-->
  <footer id="contact">
    <div class="footer-container">
      <div class="left-col">


        <div class="social-media">
          <div class="merci">
            <p class=" merci_content">
              <span class="download">
                Vous pouvez également telecharger mon cv pdf</span>
              <a href="https://drive.google.com/file/d/1MJfbo8b4wQj963JhzbzojGzkUgNCHBtF/view?usp=sharing" class="moncv">Télécharger mon cv pdf</a>
            </p>

          </div>

          <div class="border"></div>
          <a href="https://www.linkedin.com/in/antoine-assanvo-57aab5187/" class="linkedin" target="_blank">
            <i class='fab fa-linkedin-in' style='font-size:24px'></i>
          </a>
          <a href="mailto:aassanv1@gmail.com" target="_blank" class="mail">
            <i class="fa fa-envelope" style="font-size:24px;"></i>
          </a>
          <a target="_blank" href="https://www.instagram.com/genetilmusic/?hl=fr" class="insta" target="_blank">
            <i class='fab fa-instagram' style='font-size:24px'></i>
          </a>
          <a target="_blank" href="https://www.behance.net/Aassvx" class="behance" target="_blank">
            <i class='fab fa-behance' style='font-size:24px'></i>
          </a>
          <a target="_blank" href="https://soundcloud.com/genetilmusic" class="soundcloud" target="_blank">
            <i class='fab fa-soundcloud' style='font-size:24px'></i>
          </a>
        </div>

      </div>
      <div class="right-col">

        <form id="form" action="form.php" method="GET" class="form">
          <h1 class="titre-mail">Me contacter</h1>
          <label for="cv_name" class="name-form">Nom</label>
          <input id='name' type="text" name='cv_name' placeholder="Comment t'appelles-tu ?" class="txt" required />
          <label id='email' for="cv_email" class="name-form">Email</label>
          <input type="email" name='cv_email' placeholder="Donne moi ton email" class="txt" required>
          <label for="message" class="name-form">Message</label>
          <textarea id='msg' name="message" cols="50" rows="5" class="txt in_text msg"></textarea>

          <input type="submit" value="Envoyer" class="btn in_text in_send" />
        </form>

  </footer>


  <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
  <script>
    AOS.init({
      offest: 500,
      duration: 2000
    });
  </script>

</body>
<script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>

<script src="script.js"></script>



</html>