<?php

$navClass="about";

$bodyClass="about";

$pageTitle ="About Us";

include($_SERVER['DOCUMENT_ROOT'].'/inc/header.php');

?>
<main class="content scene_element scene_element--fadein">
  <div class="hero  hero--full-screen  hero--about">
    <div class="hero__overlay" id="hero-overlay"></div>

    <div class="vertical-align  text-center">

      <div class="medium-6 columns  medium-centered">
        <p>Founded in 2013, amillionmonkeys is a full stack development studio. We build websites, apps and other digital products;  offering a simple, affordable solution to those agencies who do not have an in-house web team.</p>
      </div>
    </div>
    <button class="scroll-down icon-down-arrow  hide-handheld">Down</button>

  </div>

  <section class="section  darker-blue-block  darker-blue-block--arrow text-center">
    <div class="row">
      <div class="medium-9  medium-centered  columns">
        <article class="post  intro">
          <div class="logo  logo  small-centered  columns  small-4  medium-2">
            <img src="http://<?php echo($_SERVER['HTTP_HOST']);?>/assets/svg/logo.svg" alt="amillionmonkeys">
          </div>

          <p><strong>Having worked with many different agencies across countless projects, we understand the nature of agency life; we’re cooperative, easy to communicate with and understand the importance of budgets and deadlines. </strong></p>
          <p>We’ve been lucky enough to work with some of the best and most respected agencies and brands, <a href="/work">take a look at our portfolio</a>. </p>
          <p>We’re experienced in building iOS and Android apps, bespoke Content Management Systems, CRMs and other web-applications as well as responsive emails and websites. Across the team have skills in writing PHP, Javascript, HTML, CSS and Objective C.</p>
        </article>
      </div>
    </div>
  </section>

  <section class="section  about-links  text-center" style="display:none;">
    <div class="row">
      <div class="medium-9  medium-centered  columns">

        <article class="post  intro"  id="agency">
          <buttton class="icon-close  js-close">Close</buttton>

          <h2>How We Work With Agencies</h2>
          <p>We're lucky enough to regularly work with some of the best design agencies in London. We offer a white label service and act as their in-house web team. We work faster and communicate better than offshore developers and thanks to our low overheads, we provide better value than a traditional web agency.</p>
          <p><strong>Services:</strong> Front-end (HTML5, CSS3 and Javascript) and backend (mostly PHP) development; iOS Development; Email templating and distribution; Prototyping.</p>

          <p class="buttons">
            <a class="button" href="/work/">See our work</a>
            <a class="button" href="/contact/">Contact us</a>
          </p>

        </article>
      </div>
    </div>
    <div class="row">
      <div class="medium-9  medium-centered  columns">

        <article class="post  intro"  id="company">
          <buttton class="icon-close  js-close">Close</buttton>

          <h2>How We Work With Companies &amp; Not-for-profits</h2>
          <p>Working directly with new and established organisations gives us the opportunity to offer a full range of design and development services. We spend time getting to understand our clients and their aims and then pull together a team with exactly the right expertise. We work with clients to find the perfect balance of beautiful design and elegant user-experience. We bring it all together to produce a website that enables your organisation to reach more people. </p>
          <p><strong>Services:</strong> Branding, Graphic and web design; Copywriting; Web development; social media, e-Commerce and Content Management System integration.</p>
          <p class="buttons">
            <a class="button" href="/work/">See our work</a>
            <a class="button" href="/contact/">Contact us</a>
          </p>
        </article>
      </div>
    </div>
    <div class="about-links__item   about-links__item--agency" data-target="agency">

      <h1 class="about-links__link">I am an agency</h1>

      <div class="about-links__color-block"></div>

    </div>

    <div class="about-links__item  about-links__item--company"  data-target="company">

      <h1 class="about-links__link">I am a company</h1>

      <div class="about-links__color-block"></div>

    </div>

  </section>

</main>

<?php   include($_SERVER['DOCUMENT_ROOT'].'/inc/footer.php'); ?>
