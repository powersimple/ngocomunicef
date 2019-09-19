<?php
    get_header();
?>
<section class="module interior">
 <div class="container">
    <div class="row">
                <h1 class='reverse'><?php echo $post->post_title;?></h1>
                <div class="section-thumbnail col-xs-6 col-sm-4"> 
                      <a href="<?=$permalink?>"><img src="<?=@$thumbnail?>" alt="<?=$title?>"></a>
                      </div>
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
<?php
    get_footer();
?>                                                                   