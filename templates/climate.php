<?php /* Template name: Climate Lab */ ?>

<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="profile" href="http://gmpg.org/xfn/11">
  <title>Climate Labs</title>

  <?php wp_head(); ?>
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

</head>

<body >
 
    <section class="first">
    <div class="row ">
      <img src="http://localhost:8888/climate-labs/wordpress/wp-content/themes/climate/assets/src/img/logo.svg"
        class="img-fluid logo" alt="Climate Labs">
      <div class="idiomas">
        <li class="item">
          <a class="link" href="#">PT</a>
        </li>
        <li class="item">
          <a class="link" href="#">EN</a>
        </li>
        <li class="item">
          <a class="link" href="#">ES</a>
        </li>
        </ul>
      </div>
    </div>
    <div class="vh-100 centralizar">
      <div class="container my-auto ml-auto ">
        <p class="missao"><?php the_field('missao'); ?></p>
        <h1><?php the_field('heading-one'); ?></h1>
      </div>
    </div>
    <div data-aos="fade-zoom-in" data-aos-easing="ease-in-back" data-aos-delay="10" data-aos-offset="0">
      <div class="inter-section container ">
        <div data-aos="fade-zoom-in" data-aos-easing="ease-in-back" data-aos-delay="40" data-aos-offset="0">
          <h2 class="pt-3 pr-2 pb-2 pl-2 padrao hideme"><?php the_field('h2-section-1'); ?>
          </h2>
        </div>
        <div data-aos="fade-zoom-in" data-aos-easing="ease-in-back" data-aos-delay="90" data-aos-offset="0">
          <p class="pr-2 pl-2 hideme">
            <?php the_field('paragrafo-secao-1'); ?>
          </p>
        </div>
      </div>
    </div>
  </section>
  <section class="second container d-flex justify-content-center">
    <div data-aos="fade-left" class="box-azul"></div>
    <div class="row my-auto mx-auto">
      <!-- <div class="margem"></div> -->

      <div class="col-md-7 col-sm-12 my-auto">
        <div data-aos="fade-zoom-in" data-aos-easing="ease-in-back" data-aos-delay="100" data-aos-offset="0">
          <p>
            <?php the_field('paragrafo-secao-2'); ?>
          </p>
        </div>
      </div>
      <div class="col-md-5 col-md-12 my-auto ">
        <div data-aos="fade-zoom-in" data-aos-easing="ease-in-back" data-aos-delay="50" data-aos-offset="0">
          <img
            src="http://localhost:8888/climate-labs/wordpress/wp-content/themes/climate/assets/src/img/dry-4282884.jpg"
            class="img-fluid mx-auto d-block hideme" alt="">
        </div>
      </div>

    </div>

  </section>
  <section class="third container d-flex justify-content-center">
    <div data-aos="fade-right" class="box-amarelo">
    </div>
    <div class="row my-auto mx-auto">
      <div class="col-md-5 col-sm-12 my-auto">
        <div data-aos="fade-zoom-in" data-aos-easing="ease-in-back" data-aos-delay="50" data-aos-offset="0">
          <img
            src="http://localhost:8888/climate-labs/wordpress/wp-content/themes/climate/assets/src/img/smoke-258786.jpg"
            class="img-fluid mx-auto d-block hideme" alt="">
        </div>
      </div>
      <div class="col-md-7 col-sm-12 my-auto">
        <div data-aos="fade-zoom-in" data-aos-easing="ease-in-back" data-aos-delay="100" data-aos-offset="0">
          <p>
            <?php the_field('paragrafo-secao-3'); ?>
          </p>
        </div>
      </div>
    </div>
  </section>
  <section class="fourth container d-flex flex-column justify-content-center">
    
    <div class="row justify-content-center  ">
    <h1>As instituições participantes do projeto são:</h1>
    <div class="line-break"></div>
      <h2>Instituições latino-americanas</h2>
      <div class="line-break"></div>
      <a href="https://www.udg.mx/" target="_blank" rel="noopener noreferrer nofollow"></a><img
        src="http://localhost:8888/climate-labs/wordpress/wp-content/themes/climate/assets/src/img/logos/Guadalajara.png"
        class="m-2 hideme" alt="Universidad de Guadalajara">
      <a href="https://www.pucpr.br/" target="_blank" rel="noopener noreferrer nofollow"><img
          src="http://localhost:8888/climate-labs/wordpress/wp-content/themes/climate/assets/src/img/logos/PUC-PR.png"
          class="m-2 hideme" alt="PUC-PR"></a>
      <a href="https://www.ucaldas.edu.co/portal/" target="_blank" rel="noopener noreferrer nofollow"><img
          src="http://localhost:8888/climate-labs/wordpress/wp-content/themes/climate/assets/src/img/logos/Un_caldas.png"
          class="m-2 hideme" alt="Universidad de Caldas">
        <a href="https://www1.unicap.br/" target="_blank" rel="noopener noreferrer nofollow"><img
            src="http://localhost:8888/climate-labs/wordpress/wp-content/themes/climate/assets/src/img/logos/Un_Pernambuco.png"
            class="m-2 hideme" alt="Universidade Católica de Pernambuco"></a>
        <a href="https://www.ashoka.org/" target="_blank" rel="noopener noreferrer nofollow"><img
            src="http://localhost:8888/climate-labs/wordpress/wp-content/themes/climate/assets/src/img/logos/Ashoka.jpg"
            class="m-2 hideme" alt="Ashoka"></a>
        <a href="http://www.pucrs.br/" target="_blank" rel="noopener noreferrer nofollow"><img
            src="http://localhost:8888/climate-labs/wordpress/wp-content/themes/climate/assets/src/img/logos/PUCRS.jpg"
            class="m-2 hideme" alt="PUC-RS"></a>
        <div class="line-break"></div>
        <a href="http://www.uniminuto.edu/" target="_blank" rel="noopener noreferrer nofollow"><img
            src="http://localhost:8888/climate-labs/wordpress/wp-content/themes/climate/assets/src/img/logos/Uniminuto.jpg"
            class="m-2 hideme" alt="Uniminuto"> </a>
        <a href="https://umanizales.edu.co/" target="_blank" rel="noopener noreferrer nofollow"><img
            src="http://localhost:8888/climate-labs/wordpress/wp-content/themes/climate/assets/src/img/logos/Un_Manizales.jpg"
            class="m-2 hideme" alt="Universidad de Manizales"></a>
        <a href="https://portal.uniquindio.edu.co/" target="_blank" rel="noopener noreferrer nofollow"><img
            src="http://localhost:8888/climate-labs/wordpress/wp-content/themes/climate/assets/src/img/logos/Un_del-quindio.jpg"
            class="m-2 hideme" alt="Universidad del Quindio"></a>
        <a href="https://tec.mx/es" target="_blank" rel="noopener noreferrer nofollow"><img
            src="http://localhost:8888/climate-labs/wordpress/wp-content/themes/climate/assets/src/img/logos/Un_monterrey.jpg"
            class="m-2 hideme" alt="Tecnológico de Monterrey"></a>
        <a href="https://www.utp.edu.co/" target="_blank" rel="noopener noreferrer nofollow"><img
            src="http://localhost:8888/climate-labs/wordpress/wp-content/themes/climate/assets/src/img/logos/Un_Tec-Pereira.png"
            class="m-2 hideme" alt="Universidad Tecnológica de Pereira"></a>
        <div class="line-break"></div>
        <h2>Instituições Europeias</h2>
        <div class="line-break"></div>
        <a href="https://www.univ-lorraine.fr/" target="_blank" rel="noopener noreferrer nofollow"><img
            src="http://localhost:8888/climate-labs/wordpress/wp-content/themes/climate/assets/src/img/logos/Un_lorraine.jpg"
            class="m-2 hideme" alt="Université de Lorraine"></a>
        <a href="https://unige.it/" target="_blank" rel="noopener noreferrer nofollow"><img
            src="http://localhost:8888/climate-labs/wordpress/wp-content/themes/climate/assets/src/img/logos/Un_Genova.jpg"
            class="m-2 hideme" alt="Università Degli Studi di Genova"></a>
        <a href="http://www.upv.es/" target="_blank" rel="noopener noreferrer nofollow"> <img
            src="http://localhost:8888/climate-labs/wordpress/wp-content/themes/climate/assets/src/img/logos/Un_politecnica_Valencia.jpg"
            class="m-2 hideme" alt="Universitat de Valencia"></a>
    </div>

  </section>
  <section class="footer ">
    <footer class="container  py-3">
      <div class="row justify-content-center">
        <img src="http://localhost:8888/climate-labs/wordpress/wp-content/themes/climate/assets/src/img/climate.svg"
          class="svg-footer m-2" alt="">
        <img src="http://localhost:8888/climate-labs/wordpress/wp-content/themes/climate/assets/src/img/erasmus.svg"
          class="svg-footer  m-2" alt="">
      </div>
      <p class="copyright my-1">
        <?php the_field('footer'); ?>
      </p>
    </footer>
  </section>



  <script src="https://code.jquery.com/jquery-3.5.1.min.js"
    integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
  <script>
  AOS.init(
    {
      disable:  'mobile'
    }
  );
  </script>

</body>

</html>