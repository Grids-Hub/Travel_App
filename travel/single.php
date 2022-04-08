<?php  get_header(); ?>

<?php while ( have_posts() ) : the_post(); ?>
  <div class="container-fluid">
    <div class = "Single-page-content">
      <div>
        <h2><?php  the_title(); ?></h2>
      </div>
      <div>
        <?php  the_post_thumbnail(); ?>
      </div>
      <div>
        <?php  the_author(); ?>   </p>
        <?php  echo get_the_date(); ?>
      </div>
      <div>
        <p> <?php  the_excerpt(); ?> </p>
      </div>
      <div>
        <p><?php  the_content(); ?> </p>
      </div>
    </div>
  </div>
<?php endwhile; ?>
<?php  get_footer(); ?>