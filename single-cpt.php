<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Everest Refrigeration</title>
    <!-- Bootstrap-->
    <link href="<?php echo get_template_directory_uri(); ?>/css/bootstrap.min.css" rel="stylesheet">
    <!-- add this css to your main theme directory in css folder -->
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/tabstyle.css">

    <?php wp_head(); ?>
 
  </head>
<body>

          
          <section class="row page-cover5">
          <div class="container">
          <div class="row">
          <div class="col-md-6">
          <h2 class="page-title">All Services</h2>
          </div>
          <div class="col-md-6">
          <div class="bread-cumb">
          <ul class="list-inline">
          <li><a href="<?=home_url();?>">Home</a></li>
          <li><span>All Services</span></li>
          </ul>
          </div>
          </div>
          </div>
          </div>
          </section>
          <section class="row single-services-contents site-contents">
          <div class="container">
          <div class="row">
          <!-- sidebar start -->
          <div class="col-lg-3 col-md-4">
          <!-- Nav tabs-->
          <ul role="tablist" class="nav nav-tabs single-services-menu">
          <li><a href="<?php echo site_url();?>/services">All Services</a></li>
          <?php 
          /**
          * Custom Slug Name service
          */
          global $post;
          $i=1;
          $args = array(
          'posts_per_page'  =>   -1 ,
          'orderby'         => 'date',
          'order'           => 'DESC',
          'post_type'       => 'service',//put your cpt-slug here
          'post_status'     => 'publish'
          );
          $the_query = new WP_Query( $args );
          while ( $the_query->have_posts() ) :
          $the_query->the_post();
          $url = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );
          ?>
          <li role="presentation"><a href="#serviceNo-<?php echo $i;?>" aria-controls="serviceNo-<?php echo $i;?>" role="tab" data-toggle="tab"><?php the_title();?></a></li>
          <?php $i++;endwhile; ?>
          </ul>
          <div class="row banner-row"><a href="#">
          <div class="btop-box row">
          <h2 class="this-cursive">Shedule</h2>
          <h4 class="this-stitle">an appointment</h4>
          <h2 class="this-title">today!</h2>
          </div>
          <p>Nemo enim ips am voluptatem quia voluptas sit.</p>
          <h3 class="bphone">1800 456 7890</h3><img src="<?php echo get_template_directory_uri()?>/images/banner.png" alt="" class="bovelay-img"></a></div>
          </div>
          <!-- sidebar end -->
          
          
          
          <div class="col-lg-9 col-md-8">
          <div class="tab-content s_service-content">
          <!-- Single Service Content start-->
          <?php 
          if ( have_posts() ) : 
          while ( have_posts() ) : the_post(); 
          $url = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );
          ?>
          <div id="serviceNox" role="tabpanel" class="tab-pane active">
          <!-- Single Service Content-->
          <div class="this-featured-images row"><img src="<?php echo $url;?>" style="width: 840px;height: 281px;" alt=""></div>
          <h2 class="offer-title"><?php the_title();?></h2>
          <p><?php the_content();?></p>
          <?php if(get_field('more_image')!=''){?>
          <!-- show extra field by ACF -->
          <div class="media key-features">
          <div class="media-left"><span><img src="<?php echo get_field('more_image');?>" style="width: 270px; height: 328px" alt=""></span></div>
          <div class="media-body">
          <?php echo get_field('short_description');?>
          
          </div>
          
          </div>
          <?php }?>
          
          <hr class="offer-hr">
          </div>
          <?php endwhile;endif; ?>
          <!-- Single Service Content end-->
          
          
          <!-- Tab panes start-->
          <?php 
          /**
          * Custom Slug Name service
          */
          global $post;
          $i=1;
          $args = array(
          'posts_per_page'  =>   -1 ,
          'orderby'         => 'date',
          'order'           => 'DESC',
          'post_type'       => 'service',//put your same cpt-slug here 
          'post_status'     => 'publish'
          );
          $the_query = new WP_Query( $args );
          while ( $the_query->have_posts() ) :
          $the_query->the_post();
          $url = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );
          ?>
          
          
          <div id="serviceNo-<?php echo $i;?>" role="tabpanel" class="tab-pane">
          <div class="this-featured-images row"><img src="<?php echo $url;?>" style="width: 840px;height: 281px;" alt=""></div>
          <h2 class="offer-title"><?php the_title();?></h2>
          <p><?php the_content();?></p>
          <?php if(get_field('more_image')!=''){?>
          <div class="media key-features">
          <div class="media-left"><span><img src="<?php echo get_field('more_image');?>" style="width: 270px; height: 328px" alt=""></span></div>
          <div class="media-body">
          <?php echo get_field('short_description');?>
          </div>
          </div>
          <?php }?>
          <hr class="offer-hr">
          </div>
          <?php $i++; endwhile; ?>
          <!-- Tab panes ends-->
          </div>
          </div>
          </div>
          </div>
          </div>
          </section>
               <!-- you can include your footer here -->
         <script src="<?php echo get_template_directory_uri(); ?>/js/bootstrap.min.js"></script>
  
    <?php wp_footer(); ?>
  </body>
</html>
