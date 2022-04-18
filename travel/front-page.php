<?php get_header(); ?>
<?php $started = get_field("started"); ?>
<!-- Carousel wrapper -->
<div id="carouselDarkVariant" class=" carousel slide carousel-fade " data-mdb-ride="carousel">
    <!-- Indicators -->
    <div class="carousel-indicators">
        <button data-mdb-target="#carouselDarkVariant" data-mdb-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"><?php echo $started['start']; ?></button>
        <button data-mdb-target="#carouselDarkVariant" data-mdb-slide-to="1" aria-label="Slide 1"><?php echo $started['01']; ?></button>
        <button data-mdb-target="#carouselDarkVariant" data-mdb-slide-to="2" aria-label="Slide 1"><?php echo $started['02']; ?></button>
        <button data-mdb-target="#carouselDarkVariant" data-mdb-slide-to="3" aria-label="Slide 1"><?php echo $started['03']; ?></button>
    </div>
    <!-- FOllow Us -->
    <div class="d-flex h-100  follow ">
        <div class="followdata h-100 ">
            <p><?php echo $started['followus']; ?>
                <a href="#"><i class="bi bi-instagram"></i></a>
                <a href="#"><i class="bi bi-twitter"></i></a>
            </p>
        </div>
    </div>
    <!-- Inner -->
    <div class="carousel-inner ">
        <!-- Single item -->
        <?php query_posts(array('post_type' => 'sliders'));
        $i = 1;
        while (have_posts()) : the_post();
        ?>
            <div class="carousel-item  <?php if ($i == 1) echo ' active'; ?>">
                <?php the_post_thumbnail('full', array('class' => "d-block w-100 imgslider")); ?>
                <div class="position-absolute top-0 h-100  img">
                    <div class="front  ">
                        <p class="front1"><span><?php the_title(); ?></span></p>
                        <div class="front2  bounceOut"><?php the_excerpt(); ?></div>
                        <a href="<?php the_permalink(); ?>"><?php echo $started['scrolldown']; ?><span><i class="fa-solid fa-arrow-down-long scrollDown "></i></span></a>
                    </div>
                </div>
            </div>
        <?php
            $i++;
        endwhile;
        wp_reset_postdata(); ?>
    </div>
</div>


</section>
<!-- Carousel wrapper -->
<!-- Body Section-->
<section class="secondpara">
    <!-- Laptop View -->
    <?php $args = array('category_name' => 'blog');
    $front_page_query = new WP_Query($args); ?>
    <?php while ($front_page_query->have_posts()) : $front_page_query->the_post();; ?>
        <div class="container-fluid seconddivlap pb-5">
            <!-- Stack the columns on mobile by making one full-width and the other half-width -->
            <div class="row">
                <div class="col col-md-7 col-sm-12 align-self-center">
                    <!-- Card -->
                    <div class="card shadow-0 second ps-xl-5 ps-lg-0 ">
                        <!-- Card content -->
                        <div class="card-body secondtext ps-xl-5 ps-lg-3 ms-xl-5 ms-lg-0 ps-md-0 p-0 pe-xxl-5 pe-xl-0">
                            <!--Subtitle  -->
                            <p class="card-title sectext1"><span><?php the_title(); ?></span></p>
                            <!-- Title -->
                            <?php the_excerpt(); ?>
                            <!-- Text -->
                            <?php the_content(); ?>
                            <!-- Button -->
                            <a href="<?php the_permalink(); ?>" class="">
                                <?php echo $started['readmore']; ?><span><i class="fa-solid fa-right-long"></i></span></a>
                        </div>
                    </div>
                    <!-- Card -->
                </div>
                <div class="col-6 col-md-5 col-sm-12" id="post-<?php the_ID(); ?>">
                    <?php if (has_post_thumbnail()) {
                        the_post_thumbnail('full', array('class' => 'img-fluid '));
                    }  ?>
                </div>
            </div>
        </div>
    <?php endwhile; ?>
    <!-- Mobile View -->
    <?php $args = array('category_name' => 'blog');
    $front_page_query = new WP_Query($args); ?>
    <?php while ($front_page_query->have_posts()) : $front_page_query->the_post();; ?>
        <div class="container-fluid seconddivmobile p-0">
            <div class="row mx-1">
                <!-- Grid column -->
                <div class="col-md-12 mb-4 ">
                    <!-- Card -->
                    <div class="card shadow-0 card-cascade wider reverse overlay second">
                        <!-- Card content -->
                        <div class="card-body card-body-cascade text-center secondtext">
                            <!--Subtitle  -->
                            <p class="card-title sectext1"><span><?php the_title(); ?></span></p>
                            <!-- Title -->
                            <?php the_excerpt(); ?>
                            <!-- Text -->
                            <?php the_content(); ?>
                            <!-- Button -->
                            <a href="<?php the_permalink(); ?>" class=""><?php echo $started['readmore']; ?><span><i class="fa-solid fa-right-long"></i></span></a>
                        </div>
                        <!-- Card image -->
                        <div class="view view-cascade secondimage px-3 align-self-center">
                            <?php if (has_post_thumbnail()) {
                                the_post_thumbnail('full', array('class' => 'img-fluid'));
                            }
                            ?>
                        </div>
                    </div>
                    <!-- Card -->
                </div>
                <!-- Grid column -->
            </div>
        </div>
    <?php endwhile; ?>
    <?php get_footer(); ?>