<?php

/* default/index.php */
class __TwigTemplate_ae0876e4cc0f1cd571bc72590b85dcbadc4476b89da53880ee85dc50f619e28b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c330119b7226f782a8a6ca0feaac43587b09c77c3427802a79b4269d035b5f1d = $this->env->getExtension("native_profiler");
        $__internal_c330119b7226f782a8a6ca0feaac43587b09c77c3427802a79b4269d035b5f1d->enter($__internal_c330119b7226f782a8a6ca0feaac43587b09c77c3427802a79b4269d035b5f1d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/index.php"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"es\">
<head>
\t<meta charset=\"utf-8\">
\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
\t<title>Ruben Nieto - Web Personal</title>

\t<!-- Load fonts -->
\t<link rel='stylesheet' type='text/css' href='css/font-montserrat.css'>
\t<link rel='stylesheet' type='text/css' href='css/font-lora.css'>

\t<!-- Load css styles -->
\t<link rel=\"stylesheet\" type=\"text/css\" href=\"css/bootstrap.css\" />
\t<link rel=\"stylesheet\" type=\"text/css\" href=\"css/font-awesome.css\" />
\t<link rel=\"stylesheet\" type=\"text/css\" href=\"css/style.css\" />

</head>
<body>
    <?php
\t\tif(\$_GET[\"success\"] == 'yes'){
\t?>
\t\t<script>
\t\t\t\$.toaster({message: 'mail enviado correctamente', title: 'Mail enviado!', priority: 'success'});
\t\t</script>
\t<?php
\t\t}else{
\t?>
\t\t<script>
\t\t\t\$.toaster({message: 'Ha ocurrido algun error...', title: 'Mail no enviado!', priority: 'error'});
\t\t</script>
\t<?php
\t\t}
    ?>
\t<div class=\"jumbotron home home-fullscreen\" id=\"home\">
\t\t<div class=\"mask\"></div>
\t\t<a href=\"#\" class=\"logo\">
\t\t\t<img src=\"img/logo.png\" alt=\"Ruben Nieto - Web Personal\">
\t\t</a>
\t\t<a href=\"\" class=\"menu-toggle\" id=\"nav-expander\"><i class=\"fa fa-bars\"></i></a>
\t\t<!-- Offsite navigation -->
\t\t<nav class=\"menu\">
\t\t\t<a href=\"#\" class=\"close\"><i class=\"fa fa-close\"></i></a>
\t\t\t<h3>Menu</h3>
\t\t\t<ul class=\"nav\">
\t\t\t\t<li><a data-scroll href=\"#home\">Home</a></li>
\t\t\t\t<li><a data-scroll href=\"#services\">Service</a></li>
\t\t\t\t<li><a data-scroll href=\"#portfolio\">Portfolio</a></li>
\t\t\t\t<li><a data-scroll href=\"#contact\">Contact</a></li>
\t\t\t</ul>
\t\t\t<ul class=\"social-icons\">
\t\t\t\t<li><a href=\"\"><i class=\"fa fa-facebook\"></i></a></li>
\t\t\t\t<li><a href=\"\"><i class=\"fa fa-twitter\"></i></a></li>
\t\t\t\t<li><a href=\"\"><i class=\"fa fa-dribbble\"></i></a></li>
\t\t\t\t<li><a href=\"\"><i class=\"fa fa-behance\"></i></a></li>
\t\t\t\t<li><a href=\"\"><i class=\"fa fa-pinterest\"></i></a></li>
\t\t\t</ul>
\t\t</nav>
\t\t<div class=\"container\">
\t\t\t<div class=\"header-info\">
\t\t\t\t<h1>Ruben Nieto</h1>
\t\t\t\t<p>
                    Web personal donde podr&aacute;s ver todos los proyectos e inquietudes que tengo.
\t\t\t\t</p>
\t\t\t\t<a href=\"#portfolio\" class=\"btn btn-primary\">Ver proyectos</a>
\t\t\t</div>
\t\t</div>
\t</div>
\t<!-- Services section start -->
\t<section id=\"services\">
\t\t<div class=\"container\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-md-4\">
\t\t\t\t\t<div class=\"service-item\">
\t\t\t\t\t\t<div class=\"icon\"><i class=\"fa fa-diamond\"></i></div>
\t\t\t\t\t\t<h3>We Are Creative</h3>
\t\t\t\t\t\t<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
\t\t\t\t\t\t\ttempor incididunt ut labore et dolore magna aliqua Ut enim ad minim veniam,
\t\t\t\t\t\t\tquis nostrud exercitation ullamco.
\t\t\t\t\t\t</p>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-md-4\">
\t\t\t\t\t<div class=\"service-item\">
\t\t\t\t\t\t<div class=\"icon\"><i class=\"fa fa-gear\"></i></div>
\t\t\t\t\t\t<h3>We Have Skills</h3>
\t\t\t\t\t\t<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
\t\t\t\t\t\t\ttempor incididunt ut labore et dolore magna aliqua.
\t\t\t\t\t\t</p>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-md-4\">
\t\t\t\t\t<div class=\"service-item\">
\t\t\t\t\t\t<div class=\"icon\"><i class=\"fa fa-life-ring\"></i></div>
\t\t\t\t\t\t<h3>We Love To Help</h3>
\t\t\t\t\t\t<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
\t\t\t\t\t\t\ttempor incididunt ut labore et dolore magna aliqua Ut enim ad minim veniam.
\t\t\t\t\t\t</p>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</section>
\t<!-- Services section end -->
\t<!-- Portfolio section start -->
\t<section id=\"portfolio\" class=\"darker\">
\t\t<div class=\"container\">
\t\t\t<header>
\t\t\t\t<h2>Success Stories</h2>
\t\t\t\t<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
\t\t\t\t\ttempor.
\t\t\t\t</p>
\t\t\t</header>
\t\t\t<div id=\"single-project\"></div>
\t\t\t<div class=\"row\">
\t\t\t\t<figure class=\"portfolio-item col-md-4 col-sm-6\" >
\t\t\t\t\t<img class=\"img-responsive\" src=\"img/projects/project-thumbnail-1.png\" alt=\"Adena icons pack\" />
\t\t\t\t\t<figcaption class=\"mask\">
\t\t\t\t\t\t<a href=\"projects/project-1.html\">
\t\t\t\t\t\t\t<i class=\"glyphicon glyphicon-plus\"></i>
\t\t\t\t\t\t</a>
\t\t\t\t\t</figcaption>
\t\t\t\t</figure>
\t\t\t\t<figure class=\"portfolio-item col-md-4 col-sm-6\" >
\t\t\t\t\t<img class=\"img-responsive\" src=\"img/projects/project-thumbnail-1.png\" alt=\"Adena icons pack\" />
\t\t\t\t\t<figcaption class=\"mask\">
\t\t\t\t\t\t<a href=\"projects/project-1.html\">
\t\t\t\t\t\t\t<i class=\"glyphicon glyphicon-plus\"></i>
\t\t\t\t\t\t</a>
\t\t\t\t\t</figcaption>
\t\t\t\t</figure>
\t\t\t\t<figure class=\"portfolio-item col-md-4 col-sm-6\" >
\t\t\t\t\t<img class=\"img-responsive\" src=\"img/projects/project-thumbnail-1.png\" alt=\"Adena icons pack\" />
\t\t\t\t\t<figcaption class=\"mask\">
\t\t\t\t\t\t<a href=\"projects/project-1.html\">
\t\t\t\t\t\t\t<i class=\"glyphicon glyphicon-plus\"></i>
\t\t\t\t\t\t</a>
\t\t\t\t\t</figcaption>
\t\t\t\t</figure>
\t\t\t\t<figure class=\"portfolio-item col-md-4 col-sm-6\" >
\t\t\t\t\t<img class=\"img-responsive\" src=\"img/projects/project-thumbnail-1.png\" alt=\"Adena icons pack\" />
\t\t\t\t\t<figcaption class=\"mask\">
\t\t\t\t\t\t<a href=\"projects/project-1.html\">
\t\t\t\t\t\t\t<i class=\"glyphicon glyphicon-plus\"></i>
\t\t\t\t\t\t</a>
\t\t\t\t\t</figcaption>
\t\t\t\t</figure>
\t\t\t\t<figure class=\"portfolio-item col-md-4 col-sm-6\" >
\t\t\t\t\t<img class=\"img-responsive\" src=\"img/projects/project-thumbnail-1.png\" alt=\"Adena icons pack\" />
\t\t\t\t\t<figcaption class=\"mask\">
\t\t\t\t\t\t<a href=\"projects/project-1.html\">
\t\t\t\t\t\t\t<i class=\"glyphicon glyphicon-plus\"></i>
\t\t\t\t\t\t</a>
\t\t\t\t\t</figcaption>
\t\t\t\t</figure>
\t\t\t\t<figure class=\"portfolio-item col-md-4 col-sm-6\" >
\t\t\t\t\t<img class=\"img-responsive\" src=\"img/projects/project-thumbnail-1.png\" alt=\"Adena icons pack\" />
\t\t\t\t\t<figcaption class=\"mask\">
\t\t\t\t\t\t<a href=\"projects/project-1.html\">
\t\t\t\t\t\t\t<i class=\"glyphicon glyphicon-plus\"></i>
\t\t\t\t\t\t</a>
\t\t\t\t\t</figcaption>
\t\t\t\t</figure>
\t\t\t</div>
\t\t</div>
\t</section>
\t<!-- Portfolio section end -->
\t<!-- Contact section start -->
\t<section id=\"contact\">
\t\t<div class=\"container\">
\t\t\t<header>
\t\t\t\t<h2>Get in Touch</h2>
\t\t\t\t<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
\t\t\t\t\ttempor incididunt ut labore.
\t\t\t\t</p>
\t\t\t</header>
\t\t\t<div class=\"map-wrapper\">
\t\t\t\t<div class=\"map-canvas\" id=\"map-canvas\">Loading map...</div>
\t\t\t\t<div class=\"marker\">
\t\t\t\t\t<span>We Are Here</span>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-md-8\">
\t\t\t\t\t<form class=\"row\" method=\"post\" action=\"sendMail.php\">
\t\t\t\t\t\t<div class=\"form-group col-md-6\">
\t\t\t\t\t\t\t<input name=\"name\" type=\"text\" placeholder=\"Nombre\" class=\"form-control\" />
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"form-group col-md-6\">
\t\t\t\t\t\t\t<input name=\"mail\" type=\"email\" placeholder=\"Email\" class=\"form-control\" />
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"form-group col-md-12\">
\t\t\t\t\t\t\t<input name=\"subject\" type=\"text\" placeholder=\"Asunto\" class=\"form-control\" />
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"form-group col-md-12\">
\t\t\t\t\t\t\t<textarea name=\"message\" class=\"form-control\" rows=\"10\" placeholder=\"Mensaje\"></textarea>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"form-group col-md-12\">
\t\t\t\t\t\t\t<button type=\"submit\" class=\"btn btn-lg btn-primary\">Envia</button>
\t\t\t\t\t\t</div>
\t\t\t\t\t</form>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-md-3 col-md-offset-1\">
\t\t\t\t\t<address>
\t\t\t\t\t<address>
\t\t\t\t\t\t<span>Email</span>
\t\t\t\t\t\t<p>rubennieto.contact@gmail.com</p>
\t\t\t\t\t</address>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</section>
\t<!-- Contact section end -->
\t<!-- Footer start -->
\t<footer>
\t\t<div class=\"container\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-md-8\">
\t\t\t\t\t<p>&copy; 2015 Template by <a href=\"http://graphberry.com\" target=\"_blank\">GraphBerry</a></p>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-md-4\">
\t\t\t\t\t<ul class=\"social-icons\">
\t\t\t\t\t\t<li><a href=\"\"><i class=\"fa fa-facebook\"></i></a></li>
\t\t\t\t\t\t<li><a href=\"\"><i class=\"fa fa-twitter\"></i></a></li>
\t\t\t\t\t\t<li><a href=\"\"><i class=\"fa fa-dribbble\"></i></a></li>
\t\t\t\t\t\t<li><a href=\"\"><i class=\"fa fa-behance\"></i></a></li>
\t\t\t\t\t\t<li><a href=\"\"><i class=\"fa fa-pinterest\"></i></a></li>
\t\t\t\t\t</ul>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</footer>
\t<!-- Footer end  -->

\t<!-- Load jQuery -->
\t<script type=\"text/javascript\" src=\"js/jquery-1.11.2.min.js\"></script>

\t<!-- Load Booststrap -->
\t<script type=\"text/javascript\" src=\"js/bootstrap.js\"></script>

\t<script type=\"text/javascript\" src=\"js/smooth-scroll.js\"></script>

\t<script type=\"text/javascript\" src=\"https://maps.googleapis.com/maps/api/js?sensor=false\"></script>

\t<!-- Load custom js for theme -->
\t<script type=\"text/javascript\" src=\"js/app.js\"></script>

\t<!-- Load JavaScript -->
\t<script language=\"JavaScript\" src=\"js/jquery.toaster.js\"></script>

</body>
</html>";
        
        $__internal_c330119b7226f782a8a6ca0feaac43587b09c77c3427802a79b4269d035b5f1d->leave($__internal_c330119b7226f782a8a6ca0feaac43587b09c77c3427802a79b4269d035b5f1d_prof);

    }

    public function getTemplateName()
    {
        return "default/index.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html lang="es">*/
/* <head>*/
/* 	<meta charset="utf-8">*/
/* 	<meta name="viewport" content="width=device-width, initial-scale=1.0">*/
/* 	<title>Ruben Nieto - Web Personal</title>*/
/* */
/* 	<!-- Load fonts -->*/
/* 	<link rel='stylesheet' type='text/css' href='css/font-montserrat.css'>*/
/* 	<link rel='stylesheet' type='text/css' href='css/font-lora.css'>*/
/* */
/* 	<!-- Load css styles -->*/
/* 	<link rel="stylesheet" type="text/css" href="css/bootstrap.css" />*/
/* 	<link rel="stylesheet" type="text/css" href="css/font-awesome.css" />*/
/* 	<link rel="stylesheet" type="text/css" href="css/style.css" />*/
/* */
/* </head>*/
/* <body>*/
/*     <?php*/
/* 		if($_GET["success"] == 'yes'){*/
/* 	?>*/
/* 		<script>*/
/* 			$.toaster({message: 'mail enviado correctamente', title: 'Mail enviado!', priority: 'success'});*/
/* 		</script>*/
/* 	<?php*/
/* 		}else{*/
/* 	?>*/
/* 		<script>*/
/* 			$.toaster({message: 'Ha ocurrido algun error...', title: 'Mail no enviado!', priority: 'error'});*/
/* 		</script>*/
/* 	<?php*/
/* 		}*/
/*     ?>*/
/* 	<div class="jumbotron home home-fullscreen" id="home">*/
/* 		<div class="mask"></div>*/
/* 		<a href="#" class="logo">*/
/* 			<img src="img/logo.png" alt="Ruben Nieto - Web Personal">*/
/* 		</a>*/
/* 		<a href="" class="menu-toggle" id="nav-expander"><i class="fa fa-bars"></i></a>*/
/* 		<!-- Offsite navigation -->*/
/* 		<nav class="menu">*/
/* 			<a href="#" class="close"><i class="fa fa-close"></i></a>*/
/* 			<h3>Menu</h3>*/
/* 			<ul class="nav">*/
/* 				<li><a data-scroll href="#home">Home</a></li>*/
/* 				<li><a data-scroll href="#services">Service</a></li>*/
/* 				<li><a data-scroll href="#portfolio">Portfolio</a></li>*/
/* 				<li><a data-scroll href="#contact">Contact</a></li>*/
/* 			</ul>*/
/* 			<ul class="social-icons">*/
/* 				<li><a href=""><i class="fa fa-facebook"></i></a></li>*/
/* 				<li><a href=""><i class="fa fa-twitter"></i></a></li>*/
/* 				<li><a href=""><i class="fa fa-dribbble"></i></a></li>*/
/* 				<li><a href=""><i class="fa fa-behance"></i></a></li>*/
/* 				<li><a href=""><i class="fa fa-pinterest"></i></a></li>*/
/* 			</ul>*/
/* 		</nav>*/
/* 		<div class="container">*/
/* 			<div class="header-info">*/
/* 				<h1>Ruben Nieto</h1>*/
/* 				<p>*/
/*                     Web personal donde podr&aacute;s ver todos los proyectos e inquietudes que tengo.*/
/* 				</p>*/
/* 				<a href="#portfolio" class="btn btn-primary">Ver proyectos</a>*/
/* 			</div>*/
/* 		</div>*/
/* 	</div>*/
/* 	<!-- Services section start -->*/
/* 	<section id="services">*/
/* 		<div class="container">*/
/* 			<div class="row">*/
/* 				<div class="col-md-4">*/
/* 					<div class="service-item">*/
/* 						<div class="icon"><i class="fa fa-diamond"></i></div>*/
/* 						<h3>We Are Creative</h3>*/
/* 						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod*/
/* 							tempor incididunt ut labore et dolore magna aliqua Ut enim ad minim veniam,*/
/* 							quis nostrud exercitation ullamco.*/
/* 						</p>*/
/* 					</div>*/
/* 				</div>*/
/* 				<div class="col-md-4">*/
/* 					<div class="service-item">*/
/* 						<div class="icon"><i class="fa fa-gear"></i></div>*/
/* 						<h3>We Have Skills</h3>*/
/* 						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod*/
/* 							tempor incididunt ut labore et dolore magna aliqua.*/
/* 						</p>*/
/* 					</div>*/
/* 				</div>*/
/* 				<div class="col-md-4">*/
/* 					<div class="service-item">*/
/* 						<div class="icon"><i class="fa fa-life-ring"></i></div>*/
/* 						<h3>We Love To Help</h3>*/
/* 						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod*/
/* 							tempor incididunt ut labore et dolore magna aliqua Ut enim ad minim veniam.*/
/* 						</p>*/
/* 					</div>*/
/* 				</div>*/
/* 			</div>*/
/* 		</div>*/
/* 	</section>*/
/* 	<!-- Services section end -->*/
/* 	<!-- Portfolio section start -->*/
/* 	<section id="portfolio" class="darker">*/
/* 		<div class="container">*/
/* 			<header>*/
/* 				<h2>Success Stories</h2>*/
/* 				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod*/
/* 					tempor.*/
/* 				</p>*/
/* 			</header>*/
/* 			<div id="single-project"></div>*/
/* 			<div class="row">*/
/* 				<figure class="portfolio-item col-md-4 col-sm-6" >*/
/* 					<img class="img-responsive" src="img/projects/project-thumbnail-1.png" alt="Adena icons pack" />*/
/* 					<figcaption class="mask">*/
/* 						<a href="projects/project-1.html">*/
/* 							<i class="glyphicon glyphicon-plus"></i>*/
/* 						</a>*/
/* 					</figcaption>*/
/* 				</figure>*/
/* 				<figure class="portfolio-item col-md-4 col-sm-6" >*/
/* 					<img class="img-responsive" src="img/projects/project-thumbnail-1.png" alt="Adena icons pack" />*/
/* 					<figcaption class="mask">*/
/* 						<a href="projects/project-1.html">*/
/* 							<i class="glyphicon glyphicon-plus"></i>*/
/* 						</a>*/
/* 					</figcaption>*/
/* 				</figure>*/
/* 				<figure class="portfolio-item col-md-4 col-sm-6" >*/
/* 					<img class="img-responsive" src="img/projects/project-thumbnail-1.png" alt="Adena icons pack" />*/
/* 					<figcaption class="mask">*/
/* 						<a href="projects/project-1.html">*/
/* 							<i class="glyphicon glyphicon-plus"></i>*/
/* 						</a>*/
/* 					</figcaption>*/
/* 				</figure>*/
/* 				<figure class="portfolio-item col-md-4 col-sm-6" >*/
/* 					<img class="img-responsive" src="img/projects/project-thumbnail-1.png" alt="Adena icons pack" />*/
/* 					<figcaption class="mask">*/
/* 						<a href="projects/project-1.html">*/
/* 							<i class="glyphicon glyphicon-plus"></i>*/
/* 						</a>*/
/* 					</figcaption>*/
/* 				</figure>*/
/* 				<figure class="portfolio-item col-md-4 col-sm-6" >*/
/* 					<img class="img-responsive" src="img/projects/project-thumbnail-1.png" alt="Adena icons pack" />*/
/* 					<figcaption class="mask">*/
/* 						<a href="projects/project-1.html">*/
/* 							<i class="glyphicon glyphicon-plus"></i>*/
/* 						</a>*/
/* 					</figcaption>*/
/* 				</figure>*/
/* 				<figure class="portfolio-item col-md-4 col-sm-6" >*/
/* 					<img class="img-responsive" src="img/projects/project-thumbnail-1.png" alt="Adena icons pack" />*/
/* 					<figcaption class="mask">*/
/* 						<a href="projects/project-1.html">*/
/* 							<i class="glyphicon glyphicon-plus"></i>*/
/* 						</a>*/
/* 					</figcaption>*/
/* 				</figure>*/
/* 			</div>*/
/* 		</div>*/
/* 	</section>*/
/* 	<!-- Portfolio section end -->*/
/* 	<!-- Contact section start -->*/
/* 	<section id="contact">*/
/* 		<div class="container">*/
/* 			<header>*/
/* 				<h2>Get in Touch</h2>*/
/* 				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod*/
/* 					tempor incididunt ut labore.*/
/* 				</p>*/
/* 			</header>*/
/* 			<div class="map-wrapper">*/
/* 				<div class="map-canvas" id="map-canvas">Loading map...</div>*/
/* 				<div class="marker">*/
/* 					<span>We Are Here</span>*/
/* 				</div>*/
/* 			</div>*/
/* 			<div class="row">*/
/* 				<div class="col-md-8">*/
/* 					<form class="row" method="post" action="sendMail.php">*/
/* 						<div class="form-group col-md-6">*/
/* 							<input name="name" type="text" placeholder="Nombre" class="form-control" />*/
/* 						</div>*/
/* 						<div class="form-group col-md-6">*/
/* 							<input name="mail" type="email" placeholder="Email" class="form-control" />*/
/* 						</div>*/
/* 						<div class="form-group col-md-12">*/
/* 							<input name="subject" type="text" placeholder="Asunto" class="form-control" />*/
/* 						</div>*/
/* 						<div class="form-group col-md-12">*/
/* 							<textarea name="message" class="form-control" rows="10" placeholder="Mensaje"></textarea>*/
/* 						</div>*/
/* 						<div class="form-group col-md-12">*/
/* 							<button type="submit" class="btn btn-lg btn-primary">Envia</button>*/
/* 						</div>*/
/* 					</form>*/
/* 				</div>*/
/* 				<div class="col-md-3 col-md-offset-1">*/
/* 					<address>*/
/* 					<address>*/
/* 						<span>Email</span>*/
/* 						<p>rubennieto.contact@gmail.com</p>*/
/* 					</address>*/
/* 				</div>*/
/* 			</div>*/
/* 		</div>*/
/* 	</section>*/
/* 	<!-- Contact section end -->*/
/* 	<!-- Footer start -->*/
/* 	<footer>*/
/* 		<div class="container">*/
/* 			<div class="row">*/
/* 				<div class="col-md-8">*/
/* 					<p>&copy; 2015 Template by <a href="http://graphberry.com" target="_blank">GraphBerry</a></p>*/
/* 				</div>*/
/* 				<div class="col-md-4">*/
/* 					<ul class="social-icons">*/
/* 						<li><a href=""><i class="fa fa-facebook"></i></a></li>*/
/* 						<li><a href=""><i class="fa fa-twitter"></i></a></li>*/
/* 						<li><a href=""><i class="fa fa-dribbble"></i></a></li>*/
/* 						<li><a href=""><i class="fa fa-behance"></i></a></li>*/
/* 						<li><a href=""><i class="fa fa-pinterest"></i></a></li>*/
/* 					</ul>*/
/* 				</div>*/
/* 			</div>*/
/* 		</div>*/
/* 	</footer>*/
/* 	<!-- Footer end  -->*/
/* */
/* 	<!-- Load jQuery -->*/
/* 	<script type="text/javascript" src="js/jquery-1.11.2.min.js"></script>*/
/* */
/* 	<!-- Load Booststrap -->*/
/* 	<script type="text/javascript" src="js/bootstrap.js"></script>*/
/* */
/* 	<script type="text/javascript" src="js/smooth-scroll.js"></script>*/
/* */
/* 	<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?sensor=false"></script>*/
/* */
/* 	<!-- Load custom js for theme -->*/
/* 	<script type="text/javascript" src="js/app.js"></script>*/
/* */
/* 	<!-- Load JavaScript -->*/
/* 	<script language="JavaScript" src="js/jquery.toaster.js"></script>*/
/* */
/* </body>*/
/* </html>*/
