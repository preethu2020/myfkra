
<div class="anim" style="position:absolute; z-index:9999;">
<style>
.my-animation-container {
  position: absolute;
  left: 0;
  width: 100%;
  height: 100%;
}

#trigger {
  position: relative;
  top: 5px;
  height: 100%;
}

.vertical-stripe {
  position: fixed;
    top: 0;
    left: 140%;
    width: 100%;
    height: 100%;
    z-index: 500;
    transform-origin: 50% 10%;
    background-position: center;
    background-size: cover;
    background-color: #BF8954;
}

</style>
<div class="my-animation-container">
 
    <div id="trigger">
        <div id="stripe" class="vertical-stripe">
        <!--
       <p> Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
       <p> Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
        <iframe width="100%" height="100%" src="https://www.youtube.com/embed/YykjpeuMNEk" frameborder="0" allowfullscreen></iframe>-->
        </div>
    </div>
 
</div>




<script>
$(function () {
var controller = new ScrollMagic.Controller();
var leftt =  $("#stripe").css( "left" );
 var splitAnimation = new TimelineMax({paused: false});
    splitAnimation.to("#stripe", 1,{left:-900 } )
    .fromTo("#stripe", 1, {rotation: "-80", transformOrigin: "50% 0", ease:Bounce.easeOut}, {rotation: "85", transformOrigin: "50% 0" }, "rotate");
 
    var scene1 = new ScrollMagic.Scene({triggerElement: "#trigger",duration: innerWidth/4,  offset: 400})
	 .addTo(controller)
     .setTween(splitAnimation);
})
</script>
<style>
#plane {
    position:absolute;
    left: -100px;
}
</style>

<div id="target">
	<img id="plane" src="<?php echo base_url();?>myassets/images/example_bezier.png">
</div>
<script>
	$(function () { // wait for document ready
		var flightpath = {
			entry : {
				curviness: 1.25,
				autoRotate: true,
				values: [
						{x: 100,	y: -20},
						{x: 300,	y: 10}
					]
			},
			looping : {
				curviness: 1.25,
				autoRotate: true,
				values: [
						{x: 510,	y: 60},
						{x: 620,	y: -60},
						{x: 500,	y: -100},
						{x: 380,	y: 20},
						{x: 500,	y: 60},
						{x: 580,	y: 20},
						{x: 620,	y: 15}
					]
			},
			leave : {
				curviness: 1.25,
				autoRotate: true,
				values: [
						{x: 660,	y: 20},
						{x: 800,	y: 130},
						{x: $(window).width() + 300,	y: -100},
					]
			}
		};
		// init controller
		var controller = new ScrollMagic.Controller();

		// create tween
		var tween = new TimelineMax()
			.add(TweenMax.to($("#plane"), 1.2, {css:{bezier:flightpath.entry}, ease:Power1.easeInOut}))
			.add(TweenMax.to($("#plane"), 2, {css:{bezier:flightpath.looping}, ease:Power1.easeInOut}))
			.add(TweenMax.to($("#plane"), 1, {css:{bezier:flightpath.leave}, ease:Power1.easeInOut}));

		// build scene
		var scene = new ScrollMagic.Scene({triggerElement: "#trigger", duration: 2000, offset: 100})
						.setPin("#target")
						.setTween(tween)
						//.addIndicators() // add indicators (requires plugin)
						.addTo(controller);
	})
</script>

    <script src='https://cdnjs.cloudflare.com/ajax/libs/gsap/latest/TweenMax.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.5/ScrollMagic.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/gsap/1.18.2/TimelineMax.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.5/plugins/animation.gsap.js'></script>
<!--<script src='https://cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.5/plugins/debug.addIndicators.js'></script>-->
</div>