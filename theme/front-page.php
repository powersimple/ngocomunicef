

<?php
global $year;
$year = "2019";
global $conf_year;
$conf_year = "6th";
//global $conf_year = "6th";

get_header(); 


                    
?>

<section class="home-section home-parallax home-fade home-full-height" id="home">
<div id="particles-js"></div>
        <div class="hero-slider">

          <ul class="slides">
          <?php
          
    $slides = get_slides($post->ID);
    foreach ($slides as $key => $media_id) {
       $src= wp_get_attachment_image_src( $media_id,"Full");
       //var_dump($src);//var_dump(get_media_data($media_id));
       $media_data = get_media_data($media_id);
      // var_dump($media_data);
        extract((array) get_media_data($media_id));
        
        ?>

          
            <li class="bg-dark-30 bg-dark" style="background-image:url(<?php echo $src[0];?>);">
              <div class="titan-caption">
                <div class="caption-content"><!--
                 <div class="font-alt mb-30 titan-title-size-2"><?php //echo $desc; ?></div>
                  <div class="font-alt mb-40 titan-title-size-4"><?php //echo $title?></div><a class="section-scroll btn btn-border-w btn-round" href="#about"><?php echo $caption?></a>
    -->
                </div>
              </div>
            </li>
            <?php
            }
          ?>


          </ul>
          
        </div>
      </section>
      <main class="main">
       

        
      <?php
 //require_once('lava.html');
$pages = get_home_children();
foreach($pages as $key => $value){
 //var_dump($value);
  extract((array)$value);
  $class_name = get_post_meta($ID,"post-class",true);


 

  

  ?>
      <section class="module <?=@$class_name?>" id="<?php echo $slug?>">
          <div class="container">
          <div class="row">

          
               
            
                      
                      <?php
               
                       if(@$thumbnail != null){
                     ?>
                      <div class="section-thumbnail col-xs-6 col-sm-4"> 
                      <a href="<?=$permalink?>"><img src="<?=$thumbnail?>" alt="<?=$title?>"></a>
                      </div>
                      <div class="section-content col-xs-12 col-sm-8">
                      <?php
               
                       } else {
                     ?>
                      <div class="offset-xs-2"></div>
                      <div class="section-content col-xs-8 ">
                      <?php
                      }
                      ?>
                     
                       <h2 class="font-alt"> <a href="<?=$permalink?>"><?php echo $title?></a></h2>
                          
                          <?=wpautop($excerpt);?><br>
                          <a href="<?=$permalink?>">Read More</a>

                      </div>
                      
                      <?php
                    
                  
                    ?>

            </div>
           

          </div>
          </section>
           <?php
          }
          ?>
       
    
        <?php 
          
          
  
get_footer(); ?>