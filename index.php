<?php
    if (isset($_POST['name']) && isset($_POST['email']) && ( isset($_SERVER['HTTP_X_REQUESTED_WITH']) && $_SERVER['HTTP_X_REQUESTED_WITH']==='XMLHttpRequest' )   ){
        $m = new MongoClient();

        // select a database
        $db = $m->dryii;

        // select a collection (analogous to a relational database's table)
        $collection = $db->contacts;

        //// add a record
        $collection->insert($_POST);
        mail('gabor.czene@rightster.com', 'dr yii', 'kapas van:' . json_encode($_POST));
        
        die();
    }

?><!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
		<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
		<title>Dr. YII</title>
		<meta name="description" content="Dr Yii. Professional Yii contractors. Rapid works. Reliable team." />
		<meta name="keywords" content="yii framework, contractor, developer, programmer, nosql, mysql, redis, mongodb" />
		<link rel="shortcut icon" href="/favicon.ico"> 
		<link rel="stylesheet" type="text/css" href="/css/component.css" />
		<script src="/js/modernizr.custom.js"></script>
	</head>
	<body>
		<div class="container">	
			<div id="bl-main" class="bl-main">
				<section>
					<div class="bl-box">
						<h2 class="bl-icon bl-icon-about">About</h2>
					</div>
					<div class="bl-content">
						<h2>About</h2>
						<p>
							We are hungry for Yii!<br />
							If you are looking for professionals to solve your:<br />
							
								- frontend<br />
								- backend<br />
								- scalable or simple systems<br />
								- CMS<br />
								- mobile version<br />
						<br />issues, get in touch!
						</p>
						
						<!--p>
							<a href="http://tympanus.net/Development/ResponsiveMultiLevelMenu/"><strong>&laquo; Previous Demo</strong></a> |
							<a href="http://tympanus.net/codrops/?p=14783"><strong>Back to the Codrops Article</strong></a>
						</p-->
						
					</div>
					<span class="bl-icon bl-icon-close"></span>
				</section>
				<section id="bl-work-section">
					<div class="bl-box">
						<h2 class="bl-icon bl-icon-works">Works</h2>
					</div>
					<div class="bl-content">
						<h2>Our Works</h2>
						<p>Soon.</p>
						<!--ul id="bl-work-items">
							<li data-panel="panel-1"><a href="index.html#"><img src="images/1.jpg" /></a></li>
							<li data-panel="panel-2"><a href="index.html#"><img src="images/2.jpg" /></a></li>
							<li data-panel="panel-3"><a href="index.html#"><img src="images/3.jpg" /></a></li>
							<li data-panel="panel-4"><a href="index.html#"><img src="images/4.jpg" /></a></li>
						</ul-->
					</div>
					<span class="bl-icon bl-icon-close"></span>
				</section>
				<section>
					<div class="bl-box">
						<h2 class="bl-icon bl-icon-blog">Technologies</h2>
					</div>
					<div class="bl-content">
						<h2>Technologies</h2>
						<article>
							<h3>LAMP</h3>
							<h3>Yii</h3>
							<h3>MySQL, PostgreSQL</h3>
							<h3>MOSQL, Redis, MongoDB, Memcached</h3>
							<h3>Smarty, TWIG</h3>
							<h3>Javascript: native, jQuery, MooTools</h3>
							<h3>Varnish</h3>
						</article>
					</div>
					<span class="bl-icon bl-icon-close"></span>
				</section>
				<section>
					<div class="bl-box">
						<h2 class="bl-icon bl-icon-contact">Contact</h2>
					</div>
					<div class="bl-content">
						<h2>Get in touch</h2>
						<p>
                            
                            
						<form id="contact">
							<div class="row">
								<input tye="text" placeholder="name" name="name" class="fullWide required" />
							</div>
							<div class="row">
								<input tye="email" placeholder="email" name="email" class="fullWide required" />
							</div>
							<div class="row">
								<textarea class="fullWide" name="description" placeholder="plese describe your question in some words"></textarea>
							</div>
							<div class="row">
								<input type="button" class="fullWide button" value="ok" />
							</div>
							
						</form>
							
						</p>
					</div>
					<span class="bl-icon bl-icon-close"></span>
				</section>
				<!-- Panel items for the works -->
				<div class="bl-panel-items" id="bl-panel-work-items">
					<div data-panel="panel-1">
						<div>
							<img src="images/1.jpg" />
							<h3>Fixie bespoke</h3>
							<p>Iphone artisan direct trade ethical Austin. Fixie bespoke banh mi ugh, deep v vinyl hashtag. Tumblr gentrify keffiyeh pop-up iphone twee biodiesel. Occupy american apparel freegan cliche. Mustache trust fund 8-bit jean shorts mumblecore thundercats. Pour-over small batch forage cray, banjo post-ironic flannel keffiyeh cred ethnic semiotics next level tousled fashion axe. Sustainable cardigan keytar fap bushwick bespoke.</p>
						</div>
					</div>
					<div data-panel="panel-2">
						<div>
							<img src="images/2.jpg" />
							<h3>Chillwave mustache</h3>
							<p>Squid vinyl scenester literally pug, hashtag tofu try-hard typewriter polaroid craft beer mlkshk cardigan photo booth PBR. Chillwave 90's gentrify american apparel carles disrupt. Pinterest semiotics single-origin coffee craft beer thundercats irony, tumblr bushwick intelligentsia pickled. Narwhal mustache godard master cleanse street art, occupy ugh selfies put a bird on it cray salvia four loko gluten-free shoreditch.</p>
						</div>
					</div>
					<div data-panel="panel-3">
						<div>
							<img src="images/3.jpg" />
							<h3>Austin hella</h3>
							<p>Ethical cray wayfarers leggings vice, seitan banksy small batch ethnic master cleanse. Pug chillwave etsy, scenester meh occupy blue bottle tousled blog tonx pinterest selvage mixtape swag cosby sweater. Synth tousled direct trade, hella Austin craft beer ugh chambray.</p>
						</div>
					</div>
					<div data-panel="panel-4">
						<div>
							<img src="images/4.jpg" />
							<h3>Brooklyn dreamcatcher</h3>
							<p>Fashion axe 90's pug fap. Blog wayfarers brooklyn dreamcatcher, bicycle rights retro YOLO. Wes anderson lomo 90's food truck 3 wolf moon, twee jean shorts. Iphone small batch twee wolf yr before they sold out. Brooklyn echo park cred, portland pug selvage flannel seitan tousled mcsweeney's.</p>
						</div>
					</div>
					<nav>
						<span class="bl-next-work">&gt; Next Project</span>
						<span class="bl-icon bl-icon-close"></span>
					</nav>
				</div>
			</div>
		</div><!-- /container -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
		<script src="/js/boxlayout.js"></script>
		<script>
			$(function() {
				Boxlayout.init();
			});
			
            var emailFilter=/^([\w-]+(?:\.[\w-]+)*)@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$/i;            
            $('form input,form textarea').keyup(function(){
                $(this).removeClass('error');
            })
			$('form .button').click(function(){
                var ok = true;
                $('.required').each(function(){
                    if ($(this).val().replace(/ /g, '') == '' || ($(this).attr('name') == 'email' && !emailFilter.test( $(this).val())))
                    {
                        $(this).addClass('error');
                        ok = false;
                    }
                })
                if (ok){
                    var data = $('form').serializeArray();
                    $.post('/', data, function(data){
                        alert(data)
                    })
                }
			})
		</script>
	</body>
</html>
