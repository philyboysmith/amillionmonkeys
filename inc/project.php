<?php

  global $bodyClass;

  global $content;

  global $details;

?>

<main class="content  project  scene_element scene_element--fadein">
  <div class="hero  hero--half-screen  hero--project" style="background-image:url(http://<?php echo ($_SERVER['HTTP_HOST']). '/assets/images/min/' . $bodyClass . '-hero.jpg'; ?>);">
    <div class="hero__overlay" id="hero-overlay"></div>


    <div class="project-screenshot">
      <img src="http://<?php echo ($_SERVER['HTTP_HOST']). '/assets/images/min/' . $bodyClass . '-screenshots.png'; ?>" alt="<?php echo $bodyClass; ?>">
    </div>

  </div>

  <section class="section">
    <div class="row">
      <div class="medium-10 medium-centered columns">
        <div class="row">
          <article class="post  project-overview  medium-12 medium-centered  columns">
            <h1>Overview</h1>
            <?php echo $content; ?>
            <?php if (isset($url) && $url != '') {?>
            <p class="text-center spacer"><a href="<?php echo $url; ?>" target="_blank" class="button">Visit the site</a></p>
            <?php } ?>
          </article>
         
        </div>
      </div>
    </div>
  </section>

</main>
