<!-- Cta Hero Banner Section -->
<div class="container-fluid main-section" style="background:linear-gradient(rgb(173 170 170 / 58%), rgb(10 18 80 / 66%), rgb(0 0 0 / 56%)), url(<?php echo get_field('cta_banner_image') ?>);">
	<div class="container">
  <div class="row">
    <div class="col-lg-8 section-part">
      <h2><?php echo get_field('cta_title') ?></h2>
      <P class="ctapadding"><?php echo get_field('cta_describtion') ?></P>
      <button class="btn customColor">Get Started</button>
      <button class="btn ">Contact Sales</button>
    </div>
  </div>
  </div>
  <i class="fa fa-angle-double-down blink" aria-hidden="true"></i>
</div>
<!-- Cta Hero Banner Section Ends -->

<!-- Enterprises Section -->
<div class="container themeColor">
  <h3 class="whiteColor text-center p-top"> Use the tools of top enterprises </h3>
  <p class="whiteColor text-center"> Hundreds of companies manage their database operations with our products</p>
  <div class="brands">
    <div class="container">
      <div class="row">
        <div class="col">
          <div class="brands_slider_container">
            <div class="owl-carousel owl-theme brands_slider">
              <?php 
				$args = array( 'post_type' => 'enterprises', 'posts_per_page' => 10 );
				$the_query = new WP_Query( $args ); 
				if ( $the_query->have_posts() ) : 
				while ( $the_query->have_posts() ) : $the_query->the_post();
				?>
              <div class="owl-item">
                <div class="brands_item d-flex flex-column justify-content-center">
                  <img  src="<?php echo get_the_post_thumbnail_url() ?>" alt="">
                </div>
              </div>
              <?php endwhile;
				wp_reset_postdata(); ?>
					<?php endif; ?>
            </div>
			
			  <!-- Brands Slider Navigation -->
            
			  	<div class="brands_nav brands_prev">
              		<i class="fa fa-chevron-left"></i>
            	</div>
            	<div class="brands_nav brands_next">
              		<i class="fa fa-chevron-right"></i>
            	</div>
			 
			  <!-- Brands Slider Navigation Ends -->
			  
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Enterprises Section Ends -->


<!-- Resources Section -->
<div class="container">
  <h2 class="customColor2">Severalnines resources</h2>
  	<div id="carouselExampleFade" class="carousel carousel-fade" data-ride="carousel">
    <div class="carousel-inner">
	 <div class="carousel-item active">
        <div class="cards-wrapper">
            <?php 
			$args = array( 'post_type' => 'resources', 'posts_per_page' => 3,'offset'=>0 );
			$the_query = new WP_Query( $args ); 
			if ( $the_query->have_posts() ) : 
			$i=0;
			while ( $the_query->have_posts() ) : $the_query->the_post();
			$i+=1;
			?>
          <div class="card <?php if($i>1){ echo 'd-none d-md-block';  }  ?> ">
            <img src="<?php echo get_the_post_thumbnail_url() ?>" class="card-img-top image" alt="...">
           	<div class="card-body">
              <small class="date" class="bottomPadding"><?php echo get_the_date() ?> <?php echo 										get_the_author_meta('nickname') ?> </small>
              <br>
              <a href="#" class="afontsize"> <?php the_title() ?></a>
            </div>
          </div>
			<?php endwhile;
			wp_reset_postdata();
			endif; ?> 
        	</div>
        	</div>

     
      <div class="carousel-item">
          <div class="cards-wrapper">
            <?php 
			$args = array( 'post_type' => 'resources', 'posts_per_page' => 3,'offset'=>3 );
			$the_query = new WP_Query( $args ); 
			if ( $the_query->have_posts() ) :
			$i=0;
			while ( $the_query->have_posts() ) : $the_query->the_post();
			$i+=1;
			?>
          	<div class="card <?php if($i>1){ echo 'd-none d-md-block'; } ?> ">
            <img src="<?php echo get_the_post_thumbnail_url() ?>" class="card-img-top image" alt="...">
           
            <div class="card-body">
              <small class="date" class="bottomPadding"><?php echo get_the_date() ?> <?php echo 										get_the_author_meta('nickname') ?></small>
              <br>
              <a href="#" class="afontsize"> <?php the_title() ?></a>
            </div>
          	</div>
			<?php endwhile;
			wp_reset_postdata(); ?>
			<?php endif; ?> 
        </div>
      </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleFade" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleFade" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>
<!-- Resources Section Ends-->