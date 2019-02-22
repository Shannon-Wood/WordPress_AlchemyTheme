<?php get_header(); ?>

<div class="page-container">
  <div class="paws">
    <div class="bone-img" id="blog-bone"></div>
  </div>
  <div class="columns">
    <div class="column is-three-quarters">

      <?php if (have_posts()) : ?>
      <?php while (have_posts()) : the_post(); ?>

      <div class="card">
        <div class="card-image">
          <figure class="image is-4by3">
            <img src="<?php echo get_template_directory_uri() . '/img/main-story-pic.jpg';?>" alt="Placeholder image">
          </figure>
        </div>
        <div class="card-content">
          <div class="content">

            <h1><?php the_title(); ?></h1>
            <?php the_content(); ?>

          </div>
        </div>
      </div>
    </div>
  <?php endwhile; endif; ?>

    <div class="column is-one-quarter" id="side-bar">
      <h1>Recent Stories</h1>
      <figure class="image is-3by2">
        <img src="<?php echo get_template_directory_uri() . '/img/story-one.jpg';?>" alt="blog-post-link">
      </figure>
      <figure class="image is-3by2">
        <img src="<?php echo get_template_directory_uri() . '/img/story-two.jpg';?>" alt="blog-post-link">
      </figure>
      <figure class="image is-3by2">
        <img src="<?php echo get_template_directory_uri() . '/img/story-three.jpg';?>" alt="blog-post-link">
      </figure>
      <hr>
      <h1>Announcements</h1>
      <figure class="image is-4by5">
        <img src="<?php echo get_template_directory_uri() . '/img/Announcement.jpg';?>" alt="blog-post-link">
      </figure>
    </div>
  </div>
</div>
<div class="paws"></div>
<?php get_footer(); ?>



<!-- <div class="single-post-container">
  <div class="post-img"></div>
  <div class="post-text">

  </div>
</div> -->
