<!-- ファーストビューセクション -->
<section class="fv" id="fv">
  <div class="fv__video-container">
    <video class="fv__video" autoplay muted loop playsinline preload="auto" poster="<?php echo get_template_directory_uri(); ?>/image/mv.jpg">
      <source src="<?php echo get_template_directory_uri(); ?>/video/freedge-top-movie.mp4" type="video/mp4">
      <source src="<?php echo get_template_directory_uri(); ?>/video/freedge-top-movie.mov" type="video/quicktime">
    </video>
    <div class="fv__overlay"></div>
  </div>
  <div class="fv__container">
    <div class="fv__content">
      <h1 class="fv__title">ITで広がる、自由な未来</h1>
      <p class="fv__subtitle">
        <picture>
          <source srcset="<?php echo get_template_directory_uri(); ?>/image/copy-sp.webp" media="(max-width: 767px)" type="image/webp">
          <img src="<?php echo get_template_directory_uri(); ?>/image/copy.webp" alt="Expanding Freedom Through IT.">
        </picture>
      </p>
    </div>
  </div>
</section>
