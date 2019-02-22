<?php get_header(); ?>
<div class="page-container">
  <div class="paws">
    <div class="bone-img" id="blog-bone"></div>
  </div>
  <div class="header-card">
    <div class="blog-main-img"></div>
    <div class="blog-main-text">Lorem ipsum dolor sit amet, ad sed populo lobortis periculis, commodo forensibus et quo. In graeci aliquid vis. Vel eu suas adipiscing posidonium, dicam fastidii forensibus at qui, ad duo vero copiosae reprimique. An ipsum theophrastus quo, has ut stet malis etiam. Et sit ridens omnium, labore argumentum vis cu.</div>
  </div>
  <div class="columns is-multiline">

    <?php if (have_posts()) : ?>
    <?php while (have_posts()) : the_post(); ?>

    <div class="column is-one-third">
      <div class="card">
        <div class="card-image">
          <figure class="image is-4by3">
            <a href="<?php the_permalink(); ?>">
            <img src="<?php echo get_template_directory_uri() . '/img/story-one.jpg';?>" alt="Placeholder image">
            </a>
          </figure>
        </div>
        <div class="card-content">
          <div class="content">

            <?php the_content(); ?>

          </div>
        </div>
      </div>
    </div>

  <?php endwhile; endif; ?>
  
  </div>
  <div class="columns">
    <div class="column">
      <div class="card">
        <div class="card-image">
          <figure class="image is-4by3">
            <img src="<?php echo get_template_directory_uri() . '/img/health-block.jpg';?>" alt="Placeholder image">
          </figure>
        </div>
        <div class="card-content">
          <div class="content">
            Lorem ipsum dolor sit amet, at corrumpit mediocritatem nec, nonumes aliquando concludaturque id sit. Soleat albucius nec ex, no sonet vocent offendit sed. Ea meis debet scaevola vis.
          </div>
        </div>
      </div>
    </div>
    <div class="column">
      <div class="card">
        <div class="card-image">
          <figure class="image is-4by3">
            <img src="<?php echo get_template_directory_uri() . '/img/play-block.jpg';?>" alt="Placeholder image">
          </figure>
        </div>
        <div class="card-content">
          <div class="content">
            Lorem ipsum dolor sit amet, at corrumpit mediocritatem nec, nonumes aliquando concludaturque id sit. Soleat albucius nec ex, no sonet vocent offendit sed. Ea meis debet scaevola vis.
          </div>
        </div>
      </div>
    </div>
    <div class="column">
      <div class="card">
        <div class="card-image">
          <figure class="image is-4by3">
            <img src="<?php echo get_template_directory_uri() . '/img/news-block.jpg';?>" alt="Placeholder image">
          </figure>
        </div>
        <div class="card-content">
          <div class="content">
            Lorem ipsum dolor sit amet, at corrumpit mediocritatem nec, nonumes aliquando concludaturque id sit. Soleat albucius nec ex, no sonet vocent offendit sed. Ea meis debet scaevola vis.
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="paws"></div>
<?php get_footer(); ?>
