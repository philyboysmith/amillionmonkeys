<?php
$navClass="contact";

$bodyClass="contact";

$pageTitle="Contact Us";

include($_SERVER['DOCUMENT_ROOT'].'/inc/header.php');

?>
<main class="content scene_element scene_element--fadein">
  <div class="hero  hero--full-screen  hero--contact">
    <div class="hero__overlay" id="hero-overlay"></div>

    <div class="vertical-align  text-center">
      <!-- <header class="page-header">
        <h1 class="title">Contact us</h1>
        <h2 class="subtitle">Talk to us about your next project</h2>
      </header> -->
      <div class="medium-6 columns  medium-centered">
        <p><strong>amillionmonkeys is based in Brighton.</strong> We travel to London each week and work with clients throughout the UK, and the odd one elsewhere in Europe.</p>
      </div>
    </div>
    <button class="scroll-down icon-down-arrow  hide-handheld">Down</button>

  </div>

  <section class="section  yellow-block text-left  contact">
    <div class="row">
      <div class="medium-6   columns  ">
        <article class="post">
          <h1>Get in touch</h1>
          <p>If you're interested in working with amillionmonkeys on your next project, we'd love to hear from you.</p>

          <ul class="list--unstyled  contact-method">
            <li><i class="icon-phone"></i> 07512 944360 / 01273 271 002</li>
            <li><i class="icon-mail"></i> <a href="mailto:hello@amillionmonkeys.co.uk">hello@amillionmonkeys.co.uk</a></li>
            <li><i class="icon-twitter"></i> <a href="http://twitter.com/monkeyphil">@monkeyphil</a></li>
            <li><i class="icon-facebook"></i> <a href="http://facebook.com/millionmonkeys">facebook.com/millionmonkeys</a></li>
          </ul>
        </article>
      </div>
      <div class="medium-6   columns  intro">
        <article class="post">
          <h1>Send us a message</h1>
          <form id="form7" name="form7" class="wufoo topLabel page" accept-charset="UTF-8" autocomplete="off" enctype="multipart/form-data" method="post" novalidate
                action="https://amillionmonkeys.wufoo.eu/forms/p11t0wr9026ll1m/#public">
            <input id="Field3" name="Field3" type="text" placeholder="Your name">
            <input id="Field2" name="Field2" type="email" placeholder="Your email">
            <input id="Field4" name="Field4" type="text" placeholder="Phone number">
            <textarea placeholder="Your message" id="Field5" name="Field5" class="field textarea medium" spellcheck="true" rows="5" cols="50"></textarea>
            <div class="hide">
              <textarea name="comment" id="comment" rows="1" cols="1"></textarea>
              <input type="hidden" id="idstamp" name="idstamp" value="aAITuM6UdeAGRvRGOzkmJlazvparcY6mO84FuaERbuE=" />
            </div>

            <p class="text-center">
              <input id="saveForm" name="saveForm" class="btTxt submit"
      type="submit" value="Submit">
            </p>
          </form>
        </article>
      </div>
    </div>
  </section>
</main>

<?php   include($_SERVER['DOCUMENT_ROOT'].'/inc/footer.php'); ?>
