<?php

/* @LGPCore/header.html.twig */
class __TwigTemplate_fb41f6caeed7b8a12ca78c85fe8fd1042dd004c5527a17dfc384ea3e518b47b4 extends Twig_Template
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
        $__internal_2bd9e0ddcad3a8d3e283e753a9add9e81d0f003f6036c8f3ed71fad03639e863 = $this->env->getExtension("native_profiler");
        $__internal_2bd9e0ddcad3a8d3e283e753a9add9e81d0f003f6036c8f3ed71fad03639e863->enter($__internal_2bd9e0ddcad3a8d3e283e753a9add9e81d0f003f6036c8f3ed71fad03639e863_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@LGPCore/header.html.twig"));

        // line 1
        echo "<header id=\"header\">
\t  
\t\t\t<!-- start Navbar (Header) -->
\t\t\t<nav class=\"navbar navbar-primary navbar-fixed-top navbar-sticky-function\">

\t\t\t\t<div class=\"navbar-top\">
\t\t\t\t
\t\t\t\t\t<div class=\"container\">
\t\t\t\t\t\t
\t\t\t\t\t\t<div class=\"flex-row flex-align-middle\">
\t\t\t\t\t\t\t<div class=\"flex-shrink flex-columns\">
\t\t\t\t\t\t\t\t<a class=\"navbar-logo\" href=\"#\">
\t\t\t\t\t\t\t\t\t<img src=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/logo-white.png"), "html", null, true);
        echo "\" alt=\"Logo\" />
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"flex-columns\">
\t\t\t\t\t\t\t\t<div class=\"pull-right\">
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t<div class=\"navbar-mini\">
\t\t\t\t\t\t\t\t\t\t<ul class=\"clearfix\">
\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t<li class=\"dropdown bt-dropdown-click hidden-xs\">
\t\t\t\t\t\t\t\t\t\t\t\t<a id=\"currncy-dropdown\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"ion-android-globe hidden-xss\"></i> Francais
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"caret\"></span>
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t<ul class=\"dropdown-menu\" aria-labelledby=\"language-dropdown\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"#\">Francais</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"#\">English</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t<li class=\"dropdown bt-dropdown-click visible-xs\">
\t\t\t\t\t\t\t\t\t\t\t\t<a id=\"currncy-language-dropdown\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-cog\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t<ul class=\"dropdown-menu\" aria-labelledby=\"language-dropdown\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"#\"><i class=\"ion-social-usd\"></i> Dollar</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"#\"><i class=\"ion-social-euro\"></i> Europe</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"#\"><i class=\"ion-social-yen\"></i> Yen</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"divider\"></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"#\">English</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"#\">France</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"#\">Japanese</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t<li class=\"user-action\">
\t\t\t\t\t\t\t\t\t\t\t\t<a data-toggle=\"modal\" href=\"#loginModal\" class=\"btn\">Connexion</a>
\t\t\t\t\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>

\t\t\t\t\t</div>
\t\t\t\t\t
\t\t\t\t</div>
\t\t\t\t
\t\t\t\t<div class=\"navbar-bottom hidden-sm hidden-xs\">
\t\t\t\t
\t\t\t\t\t<div class=\"container\">
\t\t\t\t\t
\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t
\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<div id=\"navbar\" class=\"collapse navbar-collapse navbar-arrow\">
\t\t\t\t\t\t\t\t\t<ul class=\"nav navbar-nav\" id=\"responsive-menu\">
\t\t\t\t\t\t\t\t\t\t<li><a href=\"index.html\">Accueil</a></li>
\t\t\t\t\t\t\t\t\t\t<li><a href=\"#\">Devenir Un Grand Prof</a></li>
\t\t\t\t\t\t\t\t\t\t<li><a href=\"#\">Comment ca marche ?</a></li>
\t\t\t\t\t\t\t\t\t\t<li><a href=\"#\">Contactez-nous</a></li>
\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t</div><!--/.nav-collapse -->
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<div class=\"col-sm-3\">
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<div class=\"navbar-phone\"><i class=\"fa fa-phone\"></i> Appelez-nous: +237 697 818 740</div>
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t</div>
\t\t\t\t\t\t
\t\t\t\t\t</div>
\t\t\t\t
\t\t\t\t</div>

\t\t\t\t<div id=\"slicknav-mobile\"></div>
\t\t\t\t
\t\t\t</nav>
\t\t\t<!-- end Navbar (Header) -->

\t\t</header>";
        
        $__internal_2bd9e0ddcad3a8d3e283e753a9add9e81d0f003f6036c8f3ed71fad03639e863->leave($__internal_2bd9e0ddcad3a8d3e283e753a9add9e81d0f003f6036c8f3ed71fad03639e863_prof);

    }

    public function getTemplateName()
    {
        return "@LGPCore/header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  36 => 13,  22 => 1,);
    }
}
/* <header id="header">*/
/* 	  */
/* 			<!-- start Navbar (Header) -->*/
/* 			<nav class="navbar navbar-primary navbar-fixed-top navbar-sticky-function">*/
/* */
/* 				<div class="navbar-top">*/
/* 				*/
/* 					<div class="container">*/
/* 						*/
/* 						<div class="flex-row flex-align-middle">*/
/* 							<div class="flex-shrink flex-columns">*/
/* 								<a class="navbar-logo" href="#">*/
/* 									<img src="{{ asset('images/logo-white.png') }}" alt="Logo" />*/
/* 								</a>*/
/* 							</div>*/
/* 							<div class="flex-columns">*/
/* 								<div class="pull-right">*/
/* 								*/
/* 									<div class="navbar-mini">*/
/* 										<ul class="clearfix">*/
/* 										*/
/* 											<li class="dropdown bt-dropdown-click hidden-xs">*/
/* 												<a id="currncy-dropdown" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">*/
/* 													<i class="ion-android-globe hidden-xss"></i> Francais*/
/* 													<span class="caret"></span>*/
/* 												</a>*/
/* 												<ul class="dropdown-menu" aria-labelledby="language-dropdown">*/
/* 													<li><a href="#">Francais</a></li>*/
/* 													<li><a href="#">English</a></li>*/
/* 												</ul>*/
/* 											</li>*/
/* 											*/
/* 											<li class="dropdown bt-dropdown-click visible-xs">*/
/* 												<a id="currncy-language-dropdown" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">*/
/* 													<i class="fa fa-cog"></i>*/
/* 												</a>*/
/* 												<ul class="dropdown-menu" aria-labelledby="language-dropdown">*/
/* 													<li><a href="#"><i class="ion-social-usd"></i> Dollar</a></li>*/
/* 													<li><a href="#"><i class="ion-social-euro"></i> Europe</a></li>*/
/* 													<li><a href="#"><i class="ion-social-yen"></i> Yen</a></li>*/
/* 													<li class="divider"></li>*/
/* 													<li><a href="#">English</a></li>*/
/* 													<li><a href="#">France</a></li>*/
/* 													<li><a href="#">Japanese</a></li>*/
/* 												</ul>*/
/* 											</li>*/
/* 											*/
/* 											<li class="user-action">*/
/* 												<a data-toggle="modal" href="#loginModal" class="btn">Connexion</a>*/
/* 											</li>*/
/* */
/* 										</ul>*/
/* 									</div>*/
/* 						*/
/* 								</div>*/
/* 							</div>*/
/* 						</div>*/
/* */
/* 					</div>*/
/* 					*/
/* 				</div>*/
/* 				*/
/* 				<div class="navbar-bottom hidden-sm hidden-xs">*/
/* 				*/
/* 					<div class="container">*/
/* 					*/
/* 						<div class="row">*/
/* 						*/
/* 							<div class="col-sm-9">*/
/* 								*/
/* 								<div id="navbar" class="collapse navbar-collapse navbar-arrow">*/
/* 									<ul class="nav navbar-nav" id="responsive-menu">*/
/* 										<li><a href="index.html">Accueil</a></li>*/
/* 										<li><a href="#">Devenir Un Grand Prof</a></li>*/
/* 										<li><a href="#">Comment ca marche ?</a></li>*/
/* 										<li><a href="#">Contactez-nous</a></li>*/
/* 									</ul>*/
/* 								</div><!--/.nav-collapse -->*/
/* 								*/
/* 							</div>*/
/* 							*/
/* 							<div class="col-sm-3">*/
/* 							*/
/* 								<div class="navbar-phone"><i class="fa fa-phone"></i> Appelez-nous: +237 697 818 740</div>*/
/* 							*/
/* 							</div>*/
/* */
/* 						</div>*/
/* 						*/
/* 					</div>*/
/* 				*/
/* 				</div>*/
/* */
/* 				<div id="slicknav-mobile"></div>*/
/* 				*/
/* 			</nav>*/
/* 			<!-- end Navbar (Header) -->*/
/* */
/* 		</header>*/
