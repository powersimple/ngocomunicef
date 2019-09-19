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
<section class="module interior">
 <div class="container">
    <div class="row">
        
              
               
                    <?php
                     
                    if ( have_posts() ) {
                        while ( have_posts() ) {
                    
                            the_post(); 
                               
                  
                            ?>
                    <div class="section-content col-xs-12 col-sm-8">
                    <h1 class='reverse'><?php echo $post->post_title;?></h1>
                    <?php

echo the_content()



?>
                    </div>
                
                    <div class="section-thumbnail col-xs-6 col-sm-4"> 
                      
                      <?php
                        displayFeaturedImage();
                        parentSubNav();
                        dynamic_sidebar('page-sidebar');
                        ?>
                    </div>
                    
                    
                   
                            
                    
                        <?php }
                    }

                    ?>
         </div>
                
               
    </div>
                </section>
<?php
    get_footer();
?>                                                                   ``