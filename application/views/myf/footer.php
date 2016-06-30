    <footer id="footer">
        <div class="container">
            <div class="row">
                <!--<div class="col-sm-12 text-center bottom-separator">
                    <img src="images/home/under.png" class="img-responsive inline" alt="">
                </div>-->
                <div class="col-md-4 col-sm-6"><h2 style="margin-top: 0; margin-bottom: 26px;">Testimonial</h2>
                    <div class="testimonial bottom">
                        <?php foreach ($testimonials as $testimonial) { ?>
                        <div class="media slide">
                            <div class="center-block">
                                <a href="#"><img src="<?php echo base_url();?>uploads/testimonial/<?php echo $testimonial->image; ?> " alt="" class="center-block"></a>
                            </div>
                            <div class="media-body">
                                <blockquote><?php echo $testimonial->testimonial;?> </blockquote>
                                <h3><a href="#">- <?php echo $testimonial->name;?></a></h3>
                            </div>
                         </div> <?php } ?>
                     
                    </div> 
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="contact-info bottom">
                        <h2>Email Us</h2>
                        <address>
                       <a href="mailto:someone@example.com">she@myfkra.com</a> <br> 
                     <a href="mailto:someone@example.com">success@myfkra.com</a> <br> 
                    <a href="mailto:someone@example.com">blog@myfkra.com</a> <br> 
                      <a href="mailto:someone@example.com">creations@myfkra.com</a> <br> 
               
                        </address>

                    </div>
                </div>
                <div class="col-md-4 col-sm-12">
                    <div class="contact-form bottom">
                        <h2>Send a message</h2>

                           <?php echo form_open_multipart(current_url(),array('class' => 'form-horizontal', 'role' => 'form'));?>
                     <!--   <form id="main-contact-form" name="contact-form" method="post" action="sendemail.php"> -->
                            <div class="form-group">
                                <input type="text" name="name" class="form-control" required placeholder="Name">
                            </div>
                            <div class="form-group">
                                <input type="email" name="email" class="form-control" required placeholder="Email Id">
                            </div>
                            <div class="form-group">
                                <textarea name="message" id="message" required class="form-control" rows="8" placeholder="Your text here"></textarea>
                            </div>                        
                            <div class="form-group">
                                <input type="submit" name="submit" class="btn btn-submit" value="Submit">
                            </div>
                      <!--  </form> -->
                       <?php echo form_close();?>  
                    </div>
                </div>
                <div class="col-sm-12">
                    <div class="copyright-text text-center">
                        <p>&copy; Myfkra 2016. All Rights Reserved.</p>
                        <p>Crafted by <a target="_blank" href="http://www.aloremedia.com">Alore Media</a></p>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!--/#footer-->

    <script type="text/javascript" src="<?php echo base_url();?>myassets/js/jquery.js"></script>
    <script type="text/javascript" src="<?php echo base_url();?>myassets/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url();?>myassets/js/lightbox.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url();?>myassets/js/wow.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url();?>myassets/js/main.js"></script>  
    <script src="<?php echo base_url();?>myassets/js/p/jquery.dlmenu.js"></script>
		<script src="<?php echo base_url();?>myassets/js/p/pagetransitions.js"></script> 
	<script>
        jssor_1_slider_init = function() {
            
            var jssor_1_SlideoTransitions = [
              [{b:5500,d:3000,o:-1,r:240,e:{r:2}}],
              [{b:-1,d:1,o:-1,c:{x:51.0,t:-51.0}},{b:0,d:1000,o:1,c:{x:-51.0,t:51.0},e:{o:7,c:{x:7,t:7}}}],
              [{b:-1,d:1,o:-1,sX:9,sY:9},{b:1000,d:1000,o:1,sX:-9,sY:-9,e:{sX:2,sY:2}}],
              [{b:-1,d:1,o:-1,r:-180,sX:9,sY:9},{b:2000,d:1000,o:1,r:180,sX:-9,sY:-9,e:{r:2,sX:2,sY:2}}],
              [{b:-1,d:1,o:-1},{b:3000,d:2000,y:180,o:1,e:{y:16}}],
              [{b:-1,d:1,o:-1,r:-150},{b:7500,d:1600,o:1,r:150,e:{r:3}}],
              [{b:10000,d:2000,x:-379,e:{x:7}}],
              [{b:10000,d:2000,x:-379,e:{x:7}}],
              [{b:-1,d:1,o:-1,r:288,sX:9,sY:9},{b:9100,d:900,x:-1400,y:-660,o:1,r:-288,sX:-9,sY:-9,e:{r:6}},{b:10000,d:1600,x:-200,o:-1,e:{x:16}}]
            ];
            
            var jssor_1_options = {
              $AutoPlay: true,
              $SlideDuration: 800,
              $SlideEasing: $Jease$.$OutQuint,
              $CaptionSliderOptions: {
                $Class: $JssorCaptionSlideo$,
                $Transitions: jssor_1_SlideoTransitions
              },
              $ArrowNavigatorOptions: {
                $Class: $JssorArrowNavigator$
              },
              $BulletNavigatorOptions: {
                $Class: $JssorBulletNavigator$
              }
            };
            
            var jssor_1_slider = new $JssorSlider$("jssor_1", jssor_1_options);
            
            //responsive code begin
            //you can remove responsive code if you don't want the slider scales while window resizing
            function ScaleSlider() {
                var refSize = jssor_1_slider.$Elmt.parentNode.clientWidth;
                if (refSize) {
                    refSize = Math.min(refSize, 1920);
                    jssor_1_slider.$ScaleWidth(refSize);
                }
                else {
                    window.setTimeout(ScaleSlider, 30);
                }
            }
            ScaleSlider();
            $Jssor$.$AddEvent(window, "load", ScaleSlider);
            $Jssor$.$AddEvent(window, "resize", ScaleSlider);
            $Jssor$.$AddEvent(window, "orientationchange", ScaleSlider);
            //responsive code end
        };
		$(document).ready(function(){
  $('.testimonial').bxSlider({
    minSlides: 1,
    maxSlides: 1,
    slideMargin: 0
  });
   $('.sponser').bxSlider({
    minSlides: 1,
    maxSlides: 1,
    slideMargin: 0
  });
});
    </script>
	
	<script>
        jssor_1_slider_init();
    </script>
	
	

<script src='<?php echo base_url();?>myassets/js/moment.min.js'></script>
<script src='<?php echo base_url();?>myassets/js/jquery.min.js'></script>
<script src='<?php echo base_url();?>myassets/js/fullcalendar.min.js'></script>
<script src='<?php echo base_url();?>myassets/js/gcal.js'></script>
<script src='<?php echo base_url();?>myassets/js/jquery.bxslider.js'></script>
	
	
	</body>
</html>