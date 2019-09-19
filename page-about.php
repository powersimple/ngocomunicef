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
     $slides = get_slides($post->ID);
   // var_dump($slides);
?>
<main class="main">
<section >
        <div class="row">
            <div class="col-sm-8 col-sm-offset-2">
                <h1><?php echo $post->post_title;?></h1>
                
               
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

                       echo the_content()?>
                        </div>
                    
                    </div>
                            
                    
                        <?php }
                    }

                    ?>
                </div>
                <div class="col-sm-4 col-md-3  sidebar scaffold reverse">
                    <div class="box">


                        <?php
                            
                            dynamic_sidebar('page-sidebar');
                        ?>
                    </div>
                
            </div>
    </div>

    </div>
    </section>
</main>
<?php
    get_footer();
?>                                                                   ``