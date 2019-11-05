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
                        parentSubNav();
                        dynamic_sidebar('page-sidebar');
                      displayFeaturedImage();

?>
                    </div>
                    
                    
                   
                            
                    
                        <?php }
                    }

                    ?>
         </div>
                
               
        </div>

        <div class="gallery-wrap">
   <h3 id="slide-title">1924</h3>
   
    <div class="slider slideshow">
    <?php
    if(count($slides)){
    foreach ($slides as $key => $media_id) {
       $src= wp_get_attachment_image_src( $media_id,"Full");
       $meta = get_media_data($media_id);
    //    var_dump(get_media_data($media_id));

        //extract((array) get_media_data($media_id));
        ?>
        <div>
            <img id="crc<?=$key?>" src="<?php echo $src[0];?>" title="<?=$meta['title'];?>" data-desc="<?=$meta['desc'];?>" data-caption="<?=$meta['caption'];?>" alt="<?=$meta['alt'];?>">
        </div>
        <?php
            }
        }
          ?>
        

    </div>
   <div id="slide-desc"></div>
   
    <div id="slide-caption"></div>

</div>
    </section>
</main>
<?php
    get_footer();
?>                                                                   ``