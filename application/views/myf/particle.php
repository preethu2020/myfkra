
<style>


.c {position:fixed;
top:0;
left:0; width:100%;
height:100%;
background-blend-mode: overlay;
background:none; }
</style>
<canvas class='c'></canvas>
<script>
/* compact way of setting PI = Math.PI & so on... */
Object.getOwnPropertyNames(Math).map(function(p) {
  window[p] = Math[p]
});
/* oh, why? because I',m lazy, that's why! :P */





/*
 * =============================================
 * GLOBALS
 * =============================================
 */
var N_PARTICLES = 100, 
    
    c = document.querySelector('.c') /* canvas elem */, 
    w /* canvas width */, h /* canvas height */, 
    ctx = c.getContext('2d') /* get canvas context */,
    confettis = [],
    particles = [], 
    source = {} /* particle fountain source */, 
    t = 0, 
    req_id = null;





/*
 * =============================================
 * OBJECTS USED
 * =============================================
 */
var Particle = function(i) {
  var confetti /* current confetti piece */, 
      pos /* current particle position */, 
      v /* current particle velocity */, 
      a /* current particle acceleration */, 
      c_angle /* confetti particle angle */,
      angle_v /* angle velocity */,
      /* delay when shooting up 
       * so that they don't go all up at the same time
       * randomly generated
       */
      delay = rand(N_PARTICLES, 0, 1);
  
  /* active = was already shot up, but hasn't landed yet */
  this.active = false;
  
  /*
   * make particle active and give it a velocity so that 
   * it can start moving
   */
  this.shoot = function(ctx) {
    var angle, angle_var, val, 
        hue = rand(360, 0, 1);
    
    /* check if time for shooting this particle has arrived */
    if(t - delay >= 0) {
      /* make it active */
      this.active = true;
      
      /* choose our confetti */
      confetti = confettis[floor(random() * confettis.length)];

      /* position it at the fountain source, 
       * but a bit lower, depending on its radius
       */
      pos = { 'x': source.x + rand(-10, 10), 'y': source.y };
      
      /*
       * give it an acceleration considering gravity
       * and uniform friction (depending on its radius)
       */
      a = { 'x': 0, 'y': .4 };
      
      /* generate a random angle at which it shoots up */
      angle = rand(PI, -PI) - PI/2;
      
      /* Set up our confetti particle angle */
      c_angle = 0;
		 angle_v = rand(-30, 30);
      
      /* generate random velocity absolute value in that direction */
      val = rand(h/121, h/160);
      
      /* compute initial velocity components */
      v = {
        'x': val*cos(angle), 
        'y': val*sin(angle)
      };
    }
  };
  
  /*
   * particle is in motion, update its velocity and position
   */
  this.motionUpdate = function() {
    /*
     * velocity_incr = acceleration * time_incr
     * position_incr = velocity * time_incr
     * but time_incr = 1 in our case
     * (see the t++ line in drawOnCanvas)
     * so compute new velocity and position components
     * based on this
     */
    v.x += a.x;
    v.y += a.y;
    pos.x += round(v.x);
    pos.y += round(v.y);
    c_angle += angle_v;

    /* if it has landed = it's below canvas bottom edge */
    if(pos.y > h | pos.x < 0 | pos.x > w) {
      /* reset position to the initial one */
      pos = { 'x': source.x, 'y': source.y };
      /* ... and make this particle inactive */
      this.active = false;
    }
  };
  
  this.draw = function(ctx) {
    ctx.save(); 
    
    ctx.translate(pos.x, pos.y);
    ctx.rotate(c_angle * Math.PI / 180);

    ctx.drawImage(confetti, -(confetti.width/2), -(confetti.height/2));

    ctx.restore(); 
    
    /* update its velocity and position */
    this.motionUpdate();
  };
}





/*
 * =============================================
 * FUNCTIONS
 * =============================================
 */

/* 
 * generates a random number in the [min, max) interval
 * max: upper boundary for generated number; 
 *      defaults to 1
 * min: lower boundary for generated number; 
 *      defaults to 0
 * _int: flag specifying if generated number 
 *       should be rounded to the nearest integer
 *       falsy by default
 */
var rand = function(max, min, _int) {
  var max = (max === 0 || max)?max:.5, 
      min = min || 0, 
      gen = min + (max - min)*random();
  
  return (_int)?round(gen):gen;
};


/* Load up some confetti! */
var loadConfetti = function() {
  confetti_orange = new Image;
  confetti_orange.src = "images/orange.png";
	confettis.push(confetti_orange);

	confetti_blue = new Image;
	confetti_blue.src = "images/blue.png";
	confettis.push(confetti_blue);

	confetti_purple = new Image;
	confetti_purple.src = "images/purpile.png";
	confettis.push(confetti_purple);

	confetti_green = new Image;
	confetti_green.src = "images/green.png";
	confettis.push(confetti_green);

	confetti_yellow = new Image;
	confetti_yellow.src = "images/yellow.png";
	confettis.push(confetti_yellow);

	confetti_purple_circle = new Image;
	confetti_purple_circle.src = "images/green.png";
	confettis.push(confetti_purple_circle);

	confetti_orange_circle = new Image;
	confetti_orange_circle.src = "images/partilcle.png";
	confettis.push(confetti_orange_circle);
  
  confetti_blue_bar = new Image;
  confetti_blue_bar.src = "images/orange.png"
  confettis.push(confetti_blue_bar);
  
  confetti_star = new Image;
  confetti_star.src = "images/partilcle.png"
  confettis.push(confetti_star);
};



/*
 * initializes a bunch of basic stuff
 * like canvas dimensions, 
 * default particle source, 
 * particle array...
 */
var initCanvas = function() {
  var s = getComputedStyle(c);
  
  /* stop animation if any got started */
  if(req_id) {
    particles = [];
    cancelAnimationFrame(req_id);
    req_id = null;
    t = 0;
  }
  
  /* 
   * set canvas width & height
   * don't forget to also set the width & height attributes
   * of the canvas element, not just the w & h variables
   */
  w = c.width = ~~s.width.split('px')[0];
  h = c.height = ~~s.height.split('px')[0];
  
  /* set an inital source for particle fountain */
  source = { 'x': round(w/10), y: h };
  
  /* create particles and add them to the particle array */
  for(var i = 0; i < N_PARTICLES; i++) {
    particles.push(new Particle(i));
  }
  
  drawOnCanvas();
};


/*
 * goes through the particle array and
 * may call a particle's draw function
 */
var drawOnCanvas = function() {
	ctx.clearRect ( 0 , 0 , w, h );

  
  /* go through each particle in the particle array */
  for(var i = 0; i < N_PARTICLES; i++) {
    if(particles[i].active) {// if it's active
      particles[i].draw(ctx); // draw it on canvas
    }
    else { // if not...
      particles[i].shoot(ctx); // try to make it shoot up
    }
  }
  
  t++; /* time increment */
  
  /**/
  req_id = requestAnimationFrame(drawOnCanvas);
  /**/
};





/*
 * =============================================
 * START IT ALL
 * =============================================
 */

/* Pull in our confetti */
loadConfetti();

/* 
 * inside the setTimeout so that 
 * the dimensions do get set via CSS before calling 
 * the initCanvas function
 */
setTimeout(function() {
  initCanvas();
  
  /* set new canvas dimensions on viewport resize */
  addEventListener('resize', initCanvas, false);
  
  c.addEventListener('mousemove', function(e) {
    ctx.clearRect(0, 0, w, h);
    
    /* move x coordinate of particle fountain source */
    source.x = e.clientX;
    source.y = e.clientY;
  }, false);
}, 100);
</script>
	