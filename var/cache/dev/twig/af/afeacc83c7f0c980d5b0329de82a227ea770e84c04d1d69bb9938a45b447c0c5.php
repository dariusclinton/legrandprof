<?php

/* LGPCoreBundle::header.html.twig */
class __TwigTemplate_2d6b60949b614267e0f5a043b0b647457034fbad8719fba08f870b8e2eaa6c35 extends Twig_Template
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
        $__internal_dc31bf12c00a978952134dff40f86ba21f220b76e498bd06422038f039a49d38 = $this->env->getExtension("native_profiler");
        $__internal_dc31bf12c00a978952134dff40f86ba21f220b76e498bd06422038f039a49d38->enter($__internal_dc31bf12c00a978952134dff40f86ba21f220b76e498bd06422038f039a49d38_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LGPCoreBundle::header.html.twig"));

        // line 1
        echo "<header id=\"header\">

\t\t\t<!-- start Navbar (Header) -->
\t\t\t<nav class=\"navbar navbar-primary navbar-fixed-top navbar-sticky-function\">

\t\t\t\t<div class=\"navbar-top\">

\t\t\t\t\t<div class=\"container\">

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

\t\t\t\t\t\t\t\t\t<div class=\"navbar-mini\">
\t\t\t\t\t\t\t\t\t\t<ul class=\"clearfix\">

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

\t\t\t\t\t\t\t\t\t\t\t<li class=\"user-action\">
\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 49
        if ($this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 50
            echo "\t\t\t\t\t\t\t\t\t\t\t    Connecté en tant que ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "username", array()), "html", null, true);
            echo "
\t\t\t\t\t\t\t\t\t\t\t    -
\t\t\t\t\t\t\t\t\t\t\t    <a href=\"";
            // line 52
            echo $this->env->getExtension('routing')->getPath("fos_user_security_logout");
            echo "\">Déconnexion</a>
\t\t\t\t\t\t\t\t\t\t\t  ";
        } else {
            // line 54
            echo "\t\t\t\t\t\t\t\t\t\t\t    <a data-toggle=\"modal\" href=\"#loginModal\" class=\"btn\">Connexion</a>
\t\t\t\t\t\t\t\t\t\t\t  ";
        }
        // line 56
        echo "\t\t\t\t\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>

\t\t\t\t\t</div>

\t\t\t\t</div>

\t\t\t\t<div class=\"navbar-bottom hidden-sm hidden-xs\">

\t\t\t\t\t<div class=\"container\">

\t\t\t\t\t\t<div class=\"row\">

\t\t\t\t\t\t\t<div class=\"col-sm-9\">

\t\t\t\t\t\t\t\t<div id=\"navbar\" class=\"collapse navbar-collapse navbar-arrow\">
\t\t\t\t\t\t\t\t\t<ul class=\"nav navbar-nav\" id=\"responsive-menu\">
\t\t\t\t\t\t\t\t\t\t<li><a href=\"index.html\">Accueil</a></li>
\t\t\t\t\t\t\t\t\t\t<li><a href=\"#\">Devenir Un Grand Prof</a></li>
\t\t\t\t\t\t\t\t\t\t<li><a href=\"#\">Comment ca marche ?</a></li>
\t\t\t\t\t\t\t\t\t\t<li><a href=\"#\">Contactez-nous</a></li>
\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t</div><!--/.nav-collapse -->

\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t<div class=\"col-sm-3\">

\t\t\t\t\t\t\t\t<div class=\"navbar-phone\"><i class=\"fa fa-phone\"></i> Appelez-nous: +237 697 818 740</div>

\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t</div>

\t\t\t\t\t</div>

\t\t\t\t</div>

\t\t\t\t<div id=\"slicknav-mobile\"></div>

\t\t\t</nav>
\t\t\t<!-- end Navbar (Header) -->

\t\t</header>
";
        
        $__internal_dc31bf12c00a978952134dff40f86ba21f220b76e498bd06422038f039a49d38->leave($__internal_dc31bf12c00a978952134dff40f86ba21f220b76e498bd06422038f039a49d38_prof);

    }

    public function getTemplateName()
    {
        return "LGPCoreBundle::header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  92 => 56,  88 => 54,  83 => 52,  77 => 50,  75 => 49,  36 => 13,  22 => 1,);
    }
}
/* <header id="header">*/
/* */
/* 			<!-- start Navbar (Header) -->*/
/* 			<nav class="navbar navbar-primary navbar-fixed-top navbar-sticky-function">*/
/* */
/* 				<div class="navbar-top">*/
/* */
/* 					<div class="container">*/
/* */
/* 						<div class="flex-row flex-align-middle">*/
/* 							<div class="flex-shrink flex-columns">*/
/* 								<a class="navbar-logo" href="#">*/
/* 									<img src="{{ asset('images/logo-white.png') }}" alt="Logo" />*/
/* 								</a>*/
/* 							</div>*/
/* 							<div class="flex-columns">*/
/* 								<div class="pull-right">*/
/* */
/* 									<div class="navbar-mini">*/
/* 										<ul class="clearfix">*/
/* */
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
/* */
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
/* */
/* 											<li class="user-action">*/
/* 												{% if is_granted("IS_AUTHENTICATED_REMEMBERED") %}*/
/* 											    Connecté en tant que {{ app.user.username }}*/
/* 											    -*/
/* 											    <a href="{{ path('fos_user_security_logout') }}">Déconnexion</a>*/
/* 											  {% else %}*/
/* 											    <a data-toggle="modal" href="#loginModal" class="btn">Connexion</a>*/
/* 											  {% endif %}*/
/* 											</li>*/
/* */
/* 										</ul>*/
/* 									</div>*/
/* */
/* 								</div>*/
/* 							</div>*/
/* 						</div>*/
/* */
/* 					</div>*/
/* */
/* 				</div>*/
/* */
/* 				<div class="navbar-bottom hidden-sm hidden-xs">*/
/* */
/* 					<div class="container">*/
/* */
/* 						<div class="row">*/
/* */
/* 							<div class="col-sm-9">*/
/* */
/* 								<div id="navbar" class="collapse navbar-collapse navbar-arrow">*/
/* 									<ul class="nav navbar-nav" id="responsive-menu">*/
/* 										<li><a href="index.html">Accueil</a></li>*/
/* 										<li><a href="#">Devenir Un Grand Prof</a></li>*/
/* 										<li><a href="#">Comment ca marche ?</a></li>*/
/* 										<li><a href="#">Contactez-nous</a></li>*/
/* 									</ul>*/
/* 								</div><!--/.nav-collapse -->*/
/* */
/* 							</div>*/
/* */
/* 							<div class="col-sm-3">*/
/* */
/* 								<div class="navbar-phone"><i class="fa fa-phone"></i> Appelez-nous: +237 697 818 740</div>*/
/* */
/* 							</div>*/
/* */
/* 						</div>*/
/* */
/* 					</div>*/
/* */
/* 				</div>*/
/* */
/* 				<div id="slicknav-mobile"></div>*/
/* */
/* 			</nav>*/
/* 			<!-- end Navbar (Header) -->*/
/* */
/* 		</header>*/
/* */
