<?php

$navClass="work";

$bodyClass="jobs";

$pageTitle= "Jobs";


include($_SERVER['DOCUMENT_ROOT'].'/inc/header.php'); ?>


<main class="content  project  scene_element scene_element--fadein">
  <div class="hero  hero--half-screen  hero--project" style="background-image:url(http://<?php echo ($_SERVER['HTTP_HOST']). '/assets/images/jobs.jpg'; ?>);">
    <div class="hero__overlay" id="hero-overlay"></div>
<div class="vertical-align  text-center">

      <div class="medium-6 columns  medium-centered">
        <h1>Jobs</h1>
      </div>
    </div>
  </div>

  <section class="section">
    <div class="row">
      <div class="medium-10 medium-centered columns">
        <div class="row">
          <article class="post  project-overview  medium-9 columns">
            <h1>Jobs</h1>
            
          </article>
          <aside class="project-details  medium-3 columns">
          </aside>
        </div>
      </div>
    </div>
  </section>

</main>

<?php 


include($_SERVER['DOCUMENT_ROOT'].'/inc/footer.php');

?>
