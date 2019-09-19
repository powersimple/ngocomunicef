<?php
    get_header(); 
    $hero = @get_post_meta($post->ID,"hero",true);
    if($hero != ''){
        print "$hero";

  $hero_src= wp_get_attachment_image_src( $hero,"full")[0];

?>
<section class="home-section home-parallax home-fade hero" data-background="<?=$hero_src?>">

</section>
<?php
    }
?>
<main class="main">
<section class="module">
 <div class="container">
    <div class="row">
    <h1><?php echo $post->post_title;?></h1>
              
                    <div class="section-content col-xs-12 col-sm-8">
                    <?php
                     
                    if ( have_posts() ) {
                        while ( have_posts() ) {
                            the_post(); 
                            ?>
                    <div class="panel-body outer-shadow">
                        <?php
                        displayFeaturedImage();
                        ?>
                        <div class="panel-content">
                        <?php

                     //  echo the_content();
                       
                    print display_events();
                       
                       ?>
                        </div>
                    
                    </div>
                            
                    
                        <?php }
                    }

                    ?>
                </div>
               
                    

            </div>
         </div>
    </div>
                </section>
                </main>
<?php
    get_footer();
?>                                                                   