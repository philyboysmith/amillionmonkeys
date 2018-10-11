<?php

$bodyClass="home";

$navClass="home";


include_once('inc/header.php');

?>

<main class="content scene_element scene_element--fadein">

  <div class="hero  hero--full-screen  hero--home">
    <div class="hero__overlay" id="hero-overlay"></div>
    <div class="vertical-align  text-center  vertical-align--home">
      <header class="page-header">
        <h1 class="title  title--home">amillionmonkeys</h1>
        <h2 class="subtitle  subtitle--home">making the web work better</h2>
      </header>
    </div>
    <button class="scroll-down icon-down-arrow  hide-handheld">Down</button>
  </div>

  <section class="section  yellow-block  text-center">
    <div class="row">
      <div class="medium-8  medium-centered  columns">
        <article class="post  intro">
          <div class="logo  logo  small-centered  columns  small-4">
            <img src="/assets/svg/logo_white.svg" alt="amillionmonkeys">
          </div>
          <p><strong>amillionmonkeys is a Brighton-based, full-stack development studio.</strong> We partner with creative agencies to build digital products that make an impact. Experts in our field, we are great at communicating, easy to work with, and turn projects around quickly.</p>
          <p class="buttons">
            <a class="button" href="/about">Read more</a>
            <a class="button" href="/contact">Contact us</a>
          </p>
        </article>
      </div>
    </div>
  </section>

  <section class="section  grey-block grey-block--arrow">
    <div class="row  text-center">
      <div class="small-12 medium-9 medium-centered columns">
        <h2>Recent projects</h2>
        <p class="bottomless">A selection of our most recent projects. <br>To see more visit <a href="/work/">our portfolio</a>.</p>
      </div>
    </div>
  </section>

  <section class="section  section--collapse  portfolio">
    <ul class="unstyle  text-center  clearfix">
   <li class="portfolio__item">
        <figure>
          <img src="/assets/images/pinx-600.jpg" alt="">
          <figcaption class="vertical-align">
            <div  class="page-header">
              <h2 class="title"><a href="pinx.php">Pinx</a></h2>
            </div>
          </figcaption>
          <a href="pinx.php" class="portfolio__link">View online</a>
          <p class="portfolio__description">App Development</p>
        </figure>
      </li>  
      <li class="portfolio__item">
        <figure>
          <img src="/assets/images/swt-600.jpg" alt="">
          <figcaption class="vertical-align">
            <div  class="page-header">
              <h2 class="title"><a href="swt.php">Sussex Wildlife Trust</a></h2>
            </div>
          </figcaption>
          <a href="/work/swt.php" class="portfolio__link">View online</a>
          <p class="portfolio__description">Web Design & Development</p>
        </figure>
      </li>
      <li class="portfolio__item">
        <figure>
          <img src="/assets/images/pearson-600.jpg" alt="">
          <figcaption class="vertical-align">
            <div  class="page-header">
              <h2 class="title"><a href="pearson.php">Pearson</a></h2>
            </div>
          </figcaption>
          <a href="/work/pearson.php" class="portfolio__link">View online</a>
          <p class="portfolio__description">API and App Development</p>
        </figure>
      </li>
      <li class="portfolio__item">
        <figure>
          <img src="/assets/images/casillero-600.jpg" alt="">
          <figcaption class="vertical-align">
            <div  class="page-header">
              <h2 class="title"><a href="casillero.php">Casillero Del Diablo</a></h2>
            </div>
          </figcaption>
          <a href="/work/casillero.php" class="portfolio__link">View online</a>
          <p class="portfolio__description">Web Development</p>
        </figure>
      </li>
      

    </ul>
  </section>

</main>

    <?php include_once('inc/footer.php'); ?>
