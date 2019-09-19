
<?php
  $bootstrap = "col-xs-12 col-sm-6 col-md-offset-1 col-md-4 col-md-offset-1";
  ?>
  <div class="module-small footer-widgets bg-dark-reverse">
          <div class="container">
            <div class="row">
              <div class="<? echo $bootstrap;?>">
              <h5 class="widget-title font-alt">Get Our Newsletter</h5>
                 <div class="textwidget">
                    <?php
                      echo do_shortcode('[contact-form-7 id="5" title="Contact form 1"]');
                    ?>
                </div>
                 
               
              </div>
              <div class="<? echo $bootstrap;?>">
                
                  <?php dynamic_sidebar( 'footer-2' ); ?> 
                
              </div>
              <!--<div class="<? echo $bootstrap;?>">
                
                 <?php dynamic_sidebar( 'footer-3' ); ?> 
                
              </div>
              <div class="<? echo $bootstrap;?>">
              <?php dynamic_sidebar( 'footer-4' ); ?> 
                
              </div>-->
            </div>
          </div>
        </div>
        <hr class="divider-d">
  
        <hr class="divider-d">
        <footer class="footer bg-dark">
          <div class="container">
            <div class="row">
              <div class="col-sm-12">
                <p class="copyright">&copy; <?php  echo date("Y"); ?> <?php  bloginfo("name"); ?>, All Rights Reserved | <a href="/privacy-policy">Privacy Policy</a> | <a href="mailto:info@ngocomunicef.org"><i class="fa fa-envelope"></i></a> | <a href="http://twitter.com/NGOcomUNICEF" target="blank"><i class="fa fa-twitter"></i></a></p> 
              </div>
              
            </div>
              
            </div>
          </div>
        </footer>
      </div>
      <div class="scroll-up"><a href="#totop"><i class="fa fa-angle-double-up"></i></a></div>
 
</main>
    



<?php wp_footer(); ?>
<script src="<?php echo get_stylesheet_directory_uri()?>/assets/lib/jquery/dist/jquery.js"></script>
<script src="<?php echo get_stylesheet_directory_uri()?>/assets/lib/bootstrap/dist/js/bootstrap.min.js"></script>
     
    
    <script src="<?php echo get_stylesheet_directory_uri()?>/vendor.min.js"></script>
    <script src="<?php echo get_stylesheet_directory_uri()?>/assets/js/plugins.js"></script>
    <script src="<?php echo get_stylesheet_directory_uri()?>/assets/js/main.js"></script>
    <script src="<?php echo get_stylesheet_directory_uri()?>/main.min.js"></script>
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-127399448-1"></script>
<script>
// put google anaytics here
</script>


</body>
</html>